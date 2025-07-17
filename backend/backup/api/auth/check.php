<?php
/**
 * Authentication Check API Endpoint
 * Verifies user session and returns current user data
 */

require_once __DIR__ . '/../../config/config.php';

if ($_SERVER['REQUEST_METHOD'] !== 'GET') {
    errorResponse('Method not allowed', 405);
}

// Check if user is authenticated
if (!isAuthenticated()) {
    errorResponse('Not authenticated', 401);
}

try {
    $pdo = getDBConnection();
    
    // Get current user data
    $stmt = $pdo->prepare("SELECT id, email, name, role, status, created_at FROM users WHERE id = ?");
    $stmt->execute([$_SESSION['user_id']]);
    $user = $stmt->fetch();
    
    if (!$user) {
        // User not found in database, clear session
        session_destroy();
        errorResponse('User not found', 401);
    }
    
    // Check if user is still active
    if ($user['status'] !== 'active') {
        session_destroy();
        errorResponse('Account is not active', 401);
    }
    
    // Check session timeout
    if (isset($_SESSION['login_time']) && (time() - $_SESSION['login_time']) > SESSION_TIMEOUT) {
        session_destroy();
        errorResponse('Session expired', 401);
    }
    
    // Update session time
    $_SESSION['login_time'] = time();
    
    successResponse($user, 'Authentication valid');
    
} catch (Exception $e) {
    error_log("Auth check error: " . $e->getMessage());
    errorResponse('Authentication check failed', 500);
}
?> 