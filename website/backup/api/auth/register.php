<?php
/**
 * User Registration API Endpoint
 * Handles new user registration with validation
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

$name = sanitizeInput($input['name'] ?? '');
$email = sanitizeInput($input['email'] ?? '');
$password = $input['password'] ?? '';
$confirmPassword = $input['confirmPassword'] ?? '';

// Validate input
if (empty($name) || empty($email) || empty($password)) {
    errorResponse('Name, email, and password are required');
}

if (!validateEmail($email)) {
    errorResponse('Invalid email format');
}

if (!validatePassword($password)) {
    errorResponse('Password must be at least ' . PASSWORD_MIN_LENGTH . ' characters long');
}

if ($password !== $confirmPassword) {
    errorResponse('Passwords do not match');
}

try {
    $pdo = getDBConnection();
    
    // Check if email already exists
    $stmt = $pdo->prepare("SELECT id FROM users WHERE email = ?");
    $stmt->execute([$email]);
    
    if ($stmt->fetch()) {
        errorResponse('Email already registered');
    }
    
    // Hash password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    
    // Insert new user
    $stmt = $pdo->prepare("
        INSERT INTO users (name, email, password, role, status) 
        VALUES (?, ?, ?, 'user', 'active')
    ");
    
    $stmt->execute([$name, $email, $hashedPassword]);
    $userId = $pdo->lastInsertId();
    
    // Get the created user (without password)
    $stmt = $pdo->prepare("SELECT id, name, email, role, status FROM users WHERE id = ?");
    $stmt->execute([$userId]);
    $user = $stmt->fetch();
    
    // Log activity
    logActivity($userId, 'register', 'New user registration');
    
    successResponse($user, 'Registration successful');
    
} catch (Exception $e) {
    error_log("Registration error: " . $e->getMessage());
    errorResponse('Registration failed', 500);
}
?> 