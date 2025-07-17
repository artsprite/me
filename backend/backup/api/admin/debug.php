<?php
// Enable error reporting for debugging
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . '/../../config/config.php';

header('Content-Type: application/json');

try {
    // Test session
    $session_info = [
        'session_status' => session_status(),
        'session_id' => session_id(),
        'session_data' => $_SESSION ?? 'No session data'
    ];
    
    // Test database connection
    $db_info = [];
    try {
        $pdo = getDBConnection();
        $db_info['status'] = 'Connected';
        $db_info['connection'] = 'OK';
    } catch (Exception $e) {
        $db_info['status'] = 'Error';
        $db_info['error'] = $e->getMessage();
    }
    
    // Test admin check
    $admin_check = [
        'is_authenticated' => isAuthenticated(),
        'is_admin' => isAdmin(),
        'user_id' => $_SESSION['user_id'] ?? 'Not set',
        'user_role' => $_SESSION['role'] ?? $_SESSION['user_role'] ?? 'Not set'
    ];
    
    $debug_info = [
        'session' => $session_info,
        'database' => $db_info,
        'admin_check' => $admin_check,
        'request_method' => $_SERVER['REQUEST_METHOD'],
        'request_uri' => $_SERVER['REQUEST_URI'],
        'http_origin' => $_SERVER['HTTP_ORIGIN'] ?? 'Not set',
        'cookies' => $_COOKIE ?? 'No cookies'
    ];
    
    echo json_encode($debug_info, JSON_PRETTY_PRINT);
    
} catch (Exception $e) {
    http_response_code(500);
    echo json_encode([
        'error' => 'Debug error: ' . $e->getMessage(),
        'trace' => $e->getTraceAsString()
    ]);
}
?> 