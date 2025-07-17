<?php
/**
 * Logout API Endpoint
 * Handles user logout and session cleanup
 */

require_once __DIR__ . '/../../config/config.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    errorResponse('Method not allowed', 405);
}

// Require authentication
requireAuth();

try {
    $userId = $_SESSION['user_id'];
    
    // Log activity before clearing session
    logActivity($userId, 'logout', 'User logged out');
    
    // Clear session data
    session_unset();
    session_destroy();
    
    // Start new session to avoid session fixation
    session_start();
    
    successResponse(null, 'Logout successful');
    
} catch (Exception $e) {
    error_log("Logout error: " . $e->getMessage());
    errorResponse('Logout failed', 500);
}
?> 