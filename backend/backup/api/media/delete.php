<?php
/**
 * Delete Media File API Endpoint
 * Deletes a media file and its database record
 */

require_once __DIR__ . '/../../config/config.php';

if ($_SERVER['REQUEST_METHOD'] !== 'DELETE') {
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
        SELECT id, file_path, original_name
        FROM media_files 
        WHERE id = ? AND user_id = ?
    ");
    $stmt->execute([$fileId, getCurrentUserId()]);
    $file = $stmt->fetch();
    
    if (!$file) {
        errorResponse('File not found', 404);
    }
    
    // Delete file from disk
    if (file_exists($file['file_path'])) {
        if (!unlink($file['file_path'])) {
            error_log("Failed to delete file from disk: " . $file['file_path']);
        }
    }
    
    // Delete database record
    $stmt = $pdo->prepare("DELETE FROM media_files WHERE id = ? AND user_id = ?");
    $stmt->execute([$fileId, getCurrentUserId()]);
    
    if ($stmt->rowCount() === 0) {
        errorResponse('Failed to delete file record', 500);
    }
    
    // Log activity
    logActivity(getCurrentUserId(), 'file_delete', "Deleted file: {$file['original_name']}");
    
    successResponse(null, 'File deleted successfully');
    
} catch (Exception $e) {
    error_log("Delete media file error: " . $e->getMessage());
    errorResponse('Failed to delete file', 500);
}
?> 