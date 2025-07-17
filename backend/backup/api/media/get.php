<?php
/**
 * Get Media File API Endpoint
 * Returns specific media file information and serves the file
 */

require_once __DIR__ . '/../../config/config.php';

if ($_SERVER['REQUEST_METHOD'] !== 'GET') {
    errorResponse('Method not allowed', 405);
}

// Require authentication
requireAuth();

$fileId = intval($_GET['id'] ?? 0);

if ($fileId <= 0) {
    errorResponse('Invalid file ID');
}

try {
    $pdo = getDBConnection();
    
    // Get file information
    $stmt = $pdo->prepare("
        SELECT id, original_name, file_name, file_path, file_type, file_size, mime_type, 
               title, description, tags, folder, is_public, created_at, updated_at
        FROM media_files 
        WHERE id = ? AND user_id = ?
    ");
    $stmt->execute([$fileId, getCurrentUserId()]);
    $file = $stmt->fetch();
    
    if (!$file) {
        errorResponse('File not found', 404);
    }
    
    // Check if file exists on disk
    if (!file_exists($file['file_path'])) {
        errorResponse('File not found on disk', 404);
    }
    
    // If this is a download request
    if (isset($_GET['download']) && $_GET['download'] === 'true') {
        // Set headers for download
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="' . $file['original_name'] . '"');
        header('Content-Length: ' . $file['file_size']);
        header('Cache-Control: no-cache, must-revalidate');
        header('Pragma: no-cache');
        
        // Output file
        readfile($file['file_path']);
        exit();
    }
    
    // Return file information
    successResponse($file);
    
} catch (Exception $e) {
    error_log("Get media file error: " . $e->getMessage());
    errorResponse('Failed to get file information', 500);
}
?> 