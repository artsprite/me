<?php
// Include configuration
require_once 'config/database.php';
require_once 'config/config.php';

// Debug information
error_log("Request URI: " . $_SERVER['REQUEST_URI']);
error_log("Script Name: " . $_SERVER['SCRIPT_NAME']);

// Set CORS headers for API requests
$allowed_origins = [
    'https://www.salinashelton.com',
    'https://me.salinashelton.com'
];
if (isset($_SERVER['HTTP_ORIGIN']) && in_array($_SERVER['HTTP_ORIGIN'], $allowed_origins)) {
    header('Access-Control-Allow-Origin: ' . $_SERVER['HTTP_ORIGIN']);
}
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type, Authorization');
header('Access-Control-Allow-Credentials: true');

// Handle preflight requests
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit();
}

// Get the request path
$request_uri = $_SERVER['REQUEST_URI'];
$path = parse_url($request_uri, PHP_URL_PATH);
$path = trim($path, '/');

// Debug the path
error_log("Original path: " . $path);

// Remove the domain from the path if present
$path = str_replace('me.salinashelton.com', '', $path);
$path = trim($path, '/');

error_log("Processed path: " . $path);
error_log("API Path: " . (isset($api_path) ? $api_path : 'not set'));

// API routes
if (strpos($path, 'api/') === 0) {
    $api_path = substr($path, 4); // Remove 'api/' prefix
    
    // Route API requests
    switch ($api_path) {
        case 'auth/register':
            require_once 'api/auth/register.php';
            break;
        case 'auth/login':
            require_once 'api/auth/login.php';
            break;
        case 'auth/logout':
            require_once 'api/auth/logout.php';
            break;
        case 'auth/current-user':
            require_once 'api/auth/current-user.php';
            break;
        case 'auth/me':
            require_once 'api/auth/current-user.php';
            break;
        case 'auth/debug':
            require_once 'api/auth/debug.php';
            break;
        case 'media':
            require_once 'api/media/index.php';
            break;
        case 'media/upload':
            require_once 'api/media/upload.php';
            break;
        case 'media/tags':
            require_once 'api/media/tags.php';
            break;
        case 'bookings':
            require_once 'api/bookings/index.php';
            break;
        case 'journal':
            require_once 'api/journal/index.php';
            break;
        case 'newsletter/subscribe':
            require_once 'api/newsletter/subscribe.php';
            break;
        case 'newsletter/send':
            require_once 'api/newsletter/send.php';
            break;
        case 'newsletter/list':
            require_once 'api/newsletter/list.php';
            break;
        case 'newsletter/test':
            require_once 'api/newsletter/test.php';
            break;
        case 'server/status':
            require_once 'api/server/status.php';
            break;
        case 'server/update':
            require_once 'api/server/update.php';
            break;
        case 'ai/chat':
            require_once 'api/ai/chat.php';
            break;
        case 'ai/conversations':
            require_once 'api/ai/conversations.php';
            break;
        case 'admin/stats':
            require_once 'api/admin/stats.php';
            break;
        case 'admin/recent-activity':
            require_once 'api/admin/recent-activity.php';
            break;
        case 'ai/status':
            require_once 'api/ai/status.php';
            break;
        case 'admin/debug':
            require_once 'api/admin/debug.php';
            break;
        default:
            http_response_code(404);
            echo json_encode(['error' => 'API endpoint not found']);
            break;
    }
    exit();
}

// Admin panel routes
if (strpos($path, 'admin/') === 0) {
    $admin_path = substr($path, 6); // Remove 'admin/' prefix
    
    // Check if user is authenticated and is admin
    if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
        header('Location: /login');
        exit();
    }
    
    switch ($admin_path) {
        case '':
        case 'dashboard':
            require_once 'admin/dashboard.php';
            break;
        case 'media':
            require_once 'admin/media.php';
            break;
        case 'bookings':
            require_once 'admin/bookings.php';
            break;
        case 'users':
            require_once 'admin/users.php';
            break;
        case 'newsletter':
            require_once 'admin/newsletter.php';
            break;
        case 'ai-assistant':
            require_once 'admin/ai-assistant.php';
            break;
        case 'server-status':
            require_once 'admin/server-status.php';
            break;
        default:
            http_response_code(404);
            echo 'Admin page not found';
            break;
    }
    exit();
}

// Authentication pages
if ($path === 'login') {
    require_once 'admin/login.php';
    exit();
}

if ($path === 'logout') {
    session_destroy();
    header('Location: /login');
    exit();
}

// Default route - show admin login or dashboard
if ($path === '' || $path === false) {
    if (isset($_SESSION['user_id'])) {
        if ($_SESSION['role'] === 'admin') {
            header('Location: /admin/dashboard');
        } else {
            header('Location: /admin/login');
        }
    } else {
        header('Location: /login');
    }
    exit();
}

// 404 for unknown routes
http_response_code(404);
echo 'Page not found';
?> 