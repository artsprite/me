<?php
/**
 * AI Conversations API Endpoint
 * Lists AI chat conversations (admin only)
 */

require_once __DIR__ . '/../../config/config.php';

if ($_SERVER['REQUEST_METHOD'] !== 'GET') {
    errorResponse('Method not allowed', 405);
}

// Require admin access
requireAdmin();

try {
    $pdo = getDBConnection();
    
    // Get query parameters
    $page = max(1, intval($_GET['page'] ?? 1));
    $limit = min(50, max(1, intval($_GET['limit'] ?? 20)));
    $offset = ($page - 1) * $limit;
    
    $conversationId = intval($_GET['conversation_id'] ?? 0);
    
    if ($conversationId > 0) {
        // Get specific conversation with messages
        $stmt = $pdo->prepare("
            SELECT c.*, u.name as user_name
            FROM ai_conversations c
            LEFT JOIN users u ON c.user_id = u.id
            WHERE c.id = ? AND c.user_id = ?
        ");
        $stmt->execute([$conversationId, getCurrentUserId()]);
        $conversation = $stmt->fetch();
        
        if (!$conversation) {
            errorResponse('Conversation not found', 404);
        }
        
        // Get messages for this conversation
        $stmt = $pdo->prepare("
            SELECT id, role, content, created_at
            FROM ai_messages 
            WHERE conversation_id = ?
            ORDER BY created_at ASC
        ");
        $stmt->execute([$conversationId]);
        $messages = $stmt->fetchAll();
        
        $conversation['messages'] = $messages;
        
        successResponse($conversation);
    } else {
        // Get list of conversations
        $stmt = $pdo->prepare("
            SELECT c.*, u.name as user_name,
                   (SELECT COUNT(*) FROM ai_messages WHERE conversation_id = c.id) as message_count,
                   (SELECT MAX(created_at) FROM ai_messages WHERE conversation_id = c.id) as last_message_at
            FROM ai_conversations c
            LEFT JOIN users u ON c.user_id = u.id
            WHERE c.user_id = ?
            ORDER BY c.updated_at DESC
            LIMIT ? OFFSET ?
        ");
        $stmt->execute([getCurrentUserId(), $limit, $offset]);
        $conversations = $stmt->fetchAll();
        
        // Get total count
        $countStmt = $pdo->prepare("
            SELECT COUNT(*) as total 
            FROM ai_conversations 
            WHERE user_id = ?
        ");
        $countStmt->execute([getCurrentUserId()]);
        $total = $countStmt->fetch()['total'];
        
        // Get statistics
        $statsStmt = $pdo->prepare("
            SELECT 
                COUNT(DISTINCT c.id) as total_conversations,
                COUNT(m.id) as total_messages,
                COUNT(DISTINCT c.user_id) as unique_users
            FROM ai_conversations c
            LEFT JOIN ai_messages m ON c.id = m.conversation_id
            WHERE c.user_id = ?
        ");
        $statsStmt->execute([getCurrentUserId()]);
        $statistics = $statsStmt->fetch();
        
        $response = [
            'conversations' => $conversations,
            'pagination' => [
                'page' => $page,
                'limit' => $limit,
                'total' => $total,
                'pages' => ceil($total / $limit)
            ],
            'statistics' => $statistics
        ];
        
        successResponse($response);
    }
    
} catch (Exception $e) {
    error_log("AI conversations error: " . $e->getMessage());
    errorResponse('Failed to load conversations', 500);
}
?> 