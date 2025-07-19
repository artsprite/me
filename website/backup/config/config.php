<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
/**
 * Main Configuration File
 * Central configuration for the mindfulness therapy platform
 */

// Configure session for cross-domain cookies
ini_set('session.cookie_samesite', 'None');
ini_set('session.cookie_secure', '1');
ini_set('session.cookie_httponly', '1');
ini_set('session.cookie_domain', '.salinashelton.com');

// Start session if not already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Include database configuration
require_once __DIR__ . '/database.php';

// Application constants
define('APP_NAME', 'Salina Shelton Mindfulness Platform');
define('APP_VERSION', '1.0.0');
define('APP_URL', 'https://www.salinashelton.com');
define('ADMIN_URL', 'https://me.salinashelton.com');

// File upload settings
define('MAX_FILE_SIZE', 100 * 1024 * 1024); // 100MB
define('UPLOAD_PATH', __DIR__ . '/../uploads/');
define('UPLOAD_IMAGES', UPLOAD_PATH . 'images/');
define('UPLOAD_VIDEOS', UPLOAD_PATH . 'videos/');
define('UPLOAD_AUDIO', UPLOAD_PATH . 'audio/');
define('UPLOAD_PDFS', UPLOAD_PATH . 'pdfs/');
define('UPLOAD_TMP', UPLOAD_PATH . 'tmp/');

// Allowed file types
define('ALLOWED_IMAGE_TYPES', ['jpg', 'jpeg', 'png', 'gif', 'webp']);
define('ALLOWED_VIDEO_TYPES', ['mp4', 'avi', 'mov', 'wmv', 'flv', 'webm']);
define('ALLOWED_AUDIO_TYPES', ['mp3', 'wav', 'ogg', 'm4a', 'flac']);
define('ALLOWED_DOCUMENT_TYPES', ['pdf', 'doc', 'docx', 'txt', 'rtf']);

// AI Configuration
define('OLLAMA_URL', 'http://localhost:11434');
define('OLLAMA_MODEL', 'llama2');

// Email configuration
define('MAILGUN_API_KEY', 'your-mailgun-api-key');
define('MAILGUN_DOMAIN', 'your-mailgun-domain');
define('SENDGRID_API_KEY', 'your-sendgrid-api-key');

// Security settings
define('SESSION_TIMEOUT', 3600); // 1 hour
define('CSRF_TOKEN_NAME', 'csrf_token');
define('PASSWORD_MIN_LENGTH', 8);

// CORS settings
$allowed_origins = [
    'https://www.salinashelton.com',
    'https://me.salinashelton.com'
];
if (isset($_SERVER['HTTP_ORIGIN']) && in_array($_SERVER['HTTP_ORIGIN'], $allowed_origins)) {
    header('Access-Control-Allow-Origin: ' . $_SERVER['HTTP_ORIGIN']);
}
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With');
header('Access-Control-Allow-Credentials: true');

// Handle preflight requests
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit();
}

/**
 * Helper Functions
 */

// Generate CSRF token
function generateCSRFToken() {
    if (!isset($_SESSION[CSRF_TOKEN_NAME])) {
        $_SESSION[CSRF_TOKEN_NAME] = bin2hex(random_bytes(32));
    }
    return $_SESSION[CSRF_TOKEN_NAME];
}

// Verify CSRF token
function verifyCSRFToken($token) {
    return isset($_SESSION[CSRF_TOKEN_NAME]) && hash_equals($_SESSION[CSRF_TOKEN_NAME], $token);
}

// Sanitize input
function sanitizeInput($input) {
    if (is_array($input)) {
        return array_map('sanitizeInput', $input);
    }
    return htmlspecialchars(trim($input), ENT_QUOTES, 'UTF-8');
}

// Validate email
function validateEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}

// Validate password strength
function validatePassword($password) {
    return strlen($password) >= PASSWORD_MIN_LENGTH;
}

// Check if user is authenticated
function isAuthenticated() {
    return isset($_SESSION['user_id']) && 
           isset($_SESSION['login_time']) && 
           (time() - $_SESSION['login_time']) < SESSION_TIMEOUT;
}

// Check if user is admin
function isAdmin() {
    return isAuthenticated() && ($_SESSION['user_role'] === 'admin' || $_SESSION['role'] === 'admin');
}

// Require authentication
function requireAuth() {
    if (!isAuthenticated()) {
        errorResponse('Authentication required', 401);
    }
}

// Require admin access
function requireAdmin() {
    if (!isAdmin()) {
        errorResponse('Admin access required', 403);
    }
}

// Get current user ID
function getCurrentUserId() {
    return $_SESSION['user_id'] ?? null;
}

// Get current user data
function getCurrentUser() {
    if (!isAuthenticated()) {
        return null;
    }
    
    try {
        $pdo = getDBConnection();
        $stmt = $pdo->prepare("SELECT id, name, email, role, status FROM users WHERE id = ?");
        $stmt->execute([$_SESSION['user_id']]);
        return $stmt->fetch();
    } catch (Exception $e) {
        error_log("Error getting current user: " . $e->getMessage());
        return null;
    }
}

// Log activity
function logActivity($userId, $action, $description = '') {
    try {
        $pdo = getDBConnection();
        $stmt = $pdo->prepare("
            INSERT INTO activity_logs (user_id, action, description, ip_address, user_agent) 
            VALUES (?, ?, ?, ?, ?)
        ");
        $stmt->execute([
            $userId,
            $action,
            $description,
            $_SERVER['REMOTE_ADDR'] ?? '',
            $_SERVER['HTTP_USER_AGENT'] ?? ''
        ]);
    } catch (Exception $e) {
        error_log("Error logging activity: " . $e->getMessage());
    }
}

// Validate file upload
function validateFileUpload($file, $allowedTypes) {
    $result = ['valid' => true, 'error' => ''];
    
    // Check for upload errors
    if ($file['error'] !== UPLOAD_ERR_OK) {
        $result['valid'] = false;
        $result['error'] = 'File upload failed';
        return $result;
    }
    
    // Check file size
    if ($file['size'] > MAX_FILE_SIZE) {
        $result['valid'] = false;
        $result['error'] = 'File too large';
        return $result;
    }
    
    // Check file type
    $extension = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
    if (!in_array($extension, $allowedTypes)) {
        $result['valid'] = false;
        $result['error'] = 'File type not allowed';
        return $result;
    }
    
    // Check if file is actually uploaded
    if (!is_uploaded_file($file['tmp_name'])) {
        $result['valid'] = false;
        $result['error'] = 'Invalid upload';
        return $result;
    }
    
    return $result;
}

// Create upload directories if they don't exist
function createUploadDirectories() {
    $directories = [UPLOAD_IMAGES, UPLOAD_VIDEOS, UPLOAD_AUDIO, UPLOAD_PDFS, UPLOAD_TMP];
    
    foreach ($directories as $dir) {
        if (!is_dir($dir)) {
            mkdir($dir, 0755, true);
        }
    }
}

// Response functions
function successResponse($data = null, $message = 'Success') {
    $response = [
        'success' => true,
        'message' => $message
    ];
    
    if ($data !== null) {
        $response['data'] = $data;
    }
    
    jsonResponse($response);
}

function errorResponse($message = 'Error', $code = 400) {
    http_response_code($code);
    jsonResponse([
        'success' => false,
        'message' => $message
    ]);
}

function jsonResponse($data) {
    header('Content-Type: application/json');
    echo json_encode($data, JSON_UNESCAPED_UNICODE);
    exit();
}

// Initialize upload directories
createUploadDirectories();
?> 