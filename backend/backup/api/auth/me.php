<?php
/**
 * Get Current User API Endpoint
 * Returns current user information
 */

require_once __DIR__ . '/../../config/config.php';

if ($_SERVER['REQUEST_METHOD'] !== 'GET') {
    errorResponse('Method not allowed', 405);
}

// Require authentication
requireAuth();

try {
    $user = getCurrentUser();
    
    if (!$user) {
        errorResponse('User not found', 404);
    }
    
    successResponse($user);
    
} catch (Exception $e) {
    error_log("Get user error: " . $e->getMessage());
    errorResponse('Failed to get user information', 500);
}
?> 