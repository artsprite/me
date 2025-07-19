<?php
/**
 * Login API Endpoint
 * Handles user authentication and session management
 */

require_once __DIR__ . '/../../config/config.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    errorResponse('Method not allowed', 405);
}

// Get JSON input
$input = json_decode(file_get_contents('php://input'), true);

if (!$input) {
    errorResponse('Invalid JSON input');
}

$email = sanitizeInput($input['email'] ?? '');
$password = $input['password'] ?? '';

// Validate input
if (empty($email) || empty($password)) {
    errorResponse('Email and password are required');
}

if (!validateEmail($email)) {
    errorResponse('Invalid email format');
}

try {
    $pdo = getDBConnection();
    
    // Get user by email
    $stmt = $pdo->prepare("SELECT id, email, name, password, role, status FROM users WHERE email = ?");
    $stmt->execute([$email]);
    $user = $stmt->fetch();
    
    if (!$user) {
        errorResponse('Invalid email or password', 401);
    }
    
    // Check if user is active
    if ($user['status'] !== 'active') {
        errorResponse('Account is not active', 401);
    }
    
    // Verify password
    if (!password_verify($password, $user['password'])) {
        errorResponse('Invalid email or password', 401);
    }
    
    // Create session
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['user_email'] = $user['email'];
    $_SESSION['user_name'] = $user['name'];
    $_SESSION['user_role'] = $user['role'];
    $_SESSION['role'] = $user['role']; // Add this line for admin panel compatibility
    $_SESSION['login_time'] = time();
    
    // Log activity
    logActivity($user['id'], 'login', 'User logged in successfully');
    
    // Return user data (without password)
    unset($user['password']);
    
    successResponse($user, 'Login successful');
    
} catch (Exception $e) {
    error_log("Login error: " . $e->getMessage());
    errorResponse('Login failed', 500);
}
?> 