<?php
/**
 * Create Journal Entry API Endpoint
 * Creates a new journal entry
 */

require_once __DIR__ . '/../../config/config.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    errorResponse('Method not allowed', 405);
}

// Require authentication
requireAuth();

// Get JSON input
$input = json_decode(file_get_contents('php://input'), true);

if (!$input) {
    errorResponse('Invalid JSON input');
}

$title = sanitizeInput($input['title'] ?? '');
$content = sanitizeInput($input['content'] ?? '');
$moodRating = intval($input['mood_rating'] ?? 0);
$tags = $input['tags'] ?? [];
$isPrivate = boolval($input['is_private'] ?? true);

// Validate input
if (empty($content)) {
    errorResponse('Content is required');
}

// Validate mood rating
if ($moodRating > 0 && ($moodRating < 1 || $moodRating > 10)) {
    errorResponse('Mood rating must be between 1 and 10');
}

// Validate tags array
if (!is_array($tags)) {
    $tags = [];
}

try {
    $pdo = getDBConnection();
    
    // Create journal entry
    $stmt = $pdo->prepare("
        INSERT INTO journal_entries (user_id, title, content, mood_rating, tags, is_private)
        VALUES (?, ?, ?, ?, ?, ?)
    ");
    
    $stmt->execute([
        getCurrentUserId(),
        $title,
        $content,
        $moodRating > 0 ? $moodRating : null,
        json_encode($tags),
        $isPrivate
    ]);
    
    $entryId = $pdo->lastInsertId();
    
    // Get created entry
    $stmt = $pdo->prepare("
        SELECT id, title, content, mood_rating, tags, is_private, created_at, updated_at
        FROM journal_entries 
        WHERE id = ? AND user_id = ?
    ");
    $stmt->execute([$entryId, getCurrentUserId()]);
    $entry = $stmt->fetch();
    
    // Log activity
    logActivity(getCurrentUserId(), 'journal_create', "Created journal entry: {$title}");
    
    successResponse($entry, 'Journal entry created successfully');
    
} catch (Exception $e) {
    error_log("Create journal entry error: " . $e->getMessage());
    errorResponse('Failed to create journal entry', 500);
}
?> 