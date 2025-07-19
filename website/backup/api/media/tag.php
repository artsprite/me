<?php
/**
 * Update Media Tags API Endpoint
 * Updates tags, title, description, and folder for media files
 */

require_once __DIR__ . '/../../config/config.php';

if ($_SERVER['REQUEST_METHOD'] !== 'PUT') {
    errorResponse('Method not allowed', 405);
}

// Require authentication
requireAuth();

$fileId = intval($_GET['id'] ?? 0);

if ($fileId <= 0) {
    errorResponse('Invalid file ID');
}

// Get JSON input
$input = json_decode(file_get_contents('php://input'), true);

if (!$input) {
    errorResponse('Invalid JSON input');
}

$title = sanitizeInput($input['title'] ?? '');
$description = sanitizeInput($input['description'] ?? '');
$tags = $input['tags'] ?? [];
$folder = sanitizeInput($input['folder'] ?? '');
$isPublic = boolval($input['is_public'] ?? false);

try {
    $pdo = getDBConnection();
    
    // Check if file exists and belongs to user
    $stmt = $pdo->prepare("SELECT id, original_name FROM media_files WHERE id = ? AND user_id = ?");
    $stmt->execute([$fileId, getCurrentUserId()]);
    $file = $stmt->fetch();
    
    if (!$file) {
        errorResponse('File not found', 404);
    }
    
    // Validate tags array
    if (!is_array($tags)) {
        $tags = [];
    }
    
    // Update file metadata
    $stmt = $pdo->prepare("
        UPDATE media_files 
        SET title = ?, description = ?, tags = ?, folder = ?, is_public = ?, updated_at = NOW()
        WHERE id = ? AND user_id = ?
    ");
    
    $stmt->execute([
        $title,
        $description,
        json_encode($tags),
        $folder,
        $isPublic,
        $fileId,
        getCurrentUserId()
    ]);
    
    // Get updated file information
    $stmt = $pdo->prepare("
        SELECT id, original_name, file_name, file_path, file_type, file_size, mime_type, 
               title, description, tags, folder, is_public, created_at, updated_at
        FROM media_files 
        WHERE id = ? AND user_id = ?
    ");
    $stmt->execute([$fileId, getCurrentUserId()]);
    $updatedFile = $stmt->fetch();
    
    // Log activity
    logActivity(getCurrentUserId(), 'file_update', "Updated metadata for: {$file['original_name']}");
    
    successResponse($updatedFile, 'File metadata updated successfully');
    
} catch (Exception $e) {
    error_log("Update media tags error: " . $e->getMessage());
    errorResponse('Failed to update file metadata', 500);
}
?> 