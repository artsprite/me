<?php
/**
 * AI Chat API Endpoint
 * Handles chat conversations with local LLM (Ollama)
 */

require_once __DIR__ . '/../../config/config.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    errorResponse('Method not allowed', 405);
}

// Require admin access
requireAdmin();

// Get JSON input
$input = json_decode(file_get_contents('php://input'), true);

if (!$input) {
    errorResponse('Invalid JSON input');
}

$message = sanitizeInput($input['message'] ?? '');
$conversationId = intval($input['conversation_id'] ?? 0);

// Validate input
if (empty($message)) {
    errorResponse('Message is required');
}

try {
    $pdo = getDBConnection();
    
    // Create or get conversation
    if ($conversationId === 0) {
        $stmt = $pdo->prepare("
            INSERT INTO ai_conversations (user_id, title)
            VALUES (?, ?)
        ");
        $stmt->execute([getCurrentUserId(), substr($message, 0, 100) . '...']);
        $conversationId = $pdo->lastInsertId();
    } else {
        // Verify conversation belongs to user
        $stmt = $pdo->prepare("
            SELECT id FROM ai_conversations 
            WHERE id = ? AND user_id = ?
        ");
        $stmt->execute([$conversationId, getCurrentUserId()]);
        if (!$stmt->fetch()) {
            errorResponse('Conversation not found', 404);
        }
    }
    
    // Save user message
    $stmt = $pdo->prepare("
        INSERT INTO ai_messages (conversation_id, role, content)
        VALUES (?, 'user', ?)
    ");
    $stmt->execute([$conversationId, $message]);
    
    // Get conversation history for context
    $stmt = $pdo->prepare("
        SELECT role, content 
        FROM ai_messages 
        WHERE conversation_id = ?
        ORDER BY created_at ASC
        LIMIT 10
    ");
    $stmt->execute([$conversationId]);
    $history = $stmt->fetchAll();
    
    // Build conversation context
    $context = '';
    foreach ($history as $msg) {
        $context .= ($msg['role'] === 'user' ? 'User: ' : 'Assistant: ') . $msg['content'] . "\n";
    }
    
    // Prepare prompt for Ollama
    $prompt = $context . "Assistant: ";
    
    // Call Ollama API
    $ollamaResponse = callOllama($prompt, $message);
    
    if (!$ollamaResponse['success']) {
        errorResponse('AI service temporarily unavailable', 503);
    }
    
    $aiResponse = $ollamaResponse['response'];
    
    // Save AI response
    $stmt = $pdo->prepare("
        INSERT INTO ai_messages (conversation_id, role, content)
        VALUES (?, 'assistant', ?)
    ");
    $stmt->execute([$conversationId, $aiResponse]);
    
    // Log activity
    logActivity(getCurrentUserId(), 'ai_chat', "AI conversation: {$conversationId}");
    
    $response = [
        'conversation_id' => $conversationId,
        'message' => $aiResponse,
        'model' => OLLAMA_MODEL
    ];
    
    successResponse($response);
    
} catch (Exception $e) {
    error_log("AI chat error: " . $e->getMessage());
    errorResponse('Failed to process chat message', 500);
}

/**
 * Call Ollama API
 */
function callOllama($prompt, $message) {
    $url = OLLAMA_URL . '/api/generate';
    
    $data = [
        'model' => OLLAMA_MODEL,
        'prompt' => $prompt . $message,
        'stream' => false,
        'options' => [
            'temperature' => 0.7,
            'top_p' => 0.9,
            'max_tokens' => 1000
        ]
    ];
    
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Content-Type: application/json'
    ]);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 30);
    
    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
    
    if ($httpCode !== 200 || !$response) {
        error_log("Ollama API error: HTTP {$httpCode}, Response: {$response}");
        return ['success' => false, 'error' => 'Ollama API error'];
    }
    
    $result = json_decode($response, true);
    
    if (!$result || !isset($result['response'])) {
        error_log("Invalid Ollama response: " . $response);
        return ['success' => false, 'error' => 'Invalid response format'];
    }
    
    return [
        'success' => true,
        'response' => trim($result['response'])
    ];
}
?> 