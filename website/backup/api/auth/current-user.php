<?php
/**
 * Current User API Endpoint
 * Returns the currently authenticated user's information
 */

require_once __DIR__ . '/../../config/config.php';

if ($_SERVER['REQUEST_METHOD'] !== 'GET') {
    errorResponse('Method not allowed', 405);
}

// Check if user is authenticated
if (!isset($_SESSION['user_id'])) {
    errorResponse('Not authenticated', 401);
}

try {
    $pdo = getDBConnection();
    
    // Get user by ID
    $stmt = $pdo->prepare("SELECT id, email, name, role, status FROM users WHERE id = ?");
    $stmt->execute([$_SESSION['user_id']]);
    $user = $stmt->fetch();
    
    if (!$user) {
        errorResponse('User not found', 404);
    }
    
    // Check if user is active
    if ($user['status'] !== 'active') {
        errorResponse('Account is not active', 401);
    }
    
    successResponse($user, 'User information retrieved successfully');
    
} catch (Exception $e) {
    error_log("Current user error: " . $e->getMessage());
    errorResponse('Failed to retrieve user information', 500);
}
?> 