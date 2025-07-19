<?php
/**
 * Delete Journal Entry API Endpoint
 * Deletes a journal entry
 */

require_once __DIR__ . '/../../config/config.php';

if ($_SERVER['REQUEST_METHOD'] !== 'DELETE') {
    errorResponse('Method not allowed', 405);
}

// Require authentication
requireAuth();

$entryId = intval($_GET['id'] ?? 0);

if ($entryId <= 0) {
    errorResponse('Invalid entry ID');
}

try {
    $pdo = getDBConnection();
    
    // Get entry information
    $stmt = $pdo->prepare("
        SELECT id, title
        FROM journal_entries 
        WHERE id = ? AND user_id = ?
    ");
    $stmt->execute([$entryId, getCurrentUserId()]);
    $entry = $stmt->fetch();
    
    if (!$entry) {
        errorResponse('Entry not found', 404);
    }
    
    // Delete entry
    $stmt = $pdo->prepare("DELETE FROM journal_entries WHERE id = ? AND user_id = ?");
    $stmt->execute([$entryId, getCurrentUserId()]);
    
    if ($stmt->rowCount() === 0) {
        errorResponse('Failed to delete entry', 500);
    }
    
    // Log activity
    logActivity(getCurrentUserId(), 'journal_delete', "Deleted journal entry: {$entry['title']}");
    
    successResponse(null, 'Journal entry deleted successfully');
    
} catch (Exception $e) {
    error_log("Delete journal entry error: " . $e->getMessage());
    errorResponse('Failed to delete journal entry', 500);
}
?> 