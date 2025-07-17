<?php
/**
 * Debug Authentication Endpoint
 * Helps troubleshoot session and authentication issues
 */

require_once __DIR__ . '/../../config/config.php';

// Set CORS headers
header('Access-Control-Allow-Origin: https://me.salinashelton.com');
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type, Authorization');
header('Access-Control-Allow-Credentials: true');

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit();
}

try {
    $debug_info = [
        'session_id' => session_id(),
        'session_status' => session_status(),
        'session_data' => $_SESSION,
        'cookies' => $_COOKIE,
        'headers' => [
            'origin' => $_SERVER['HTTP_ORIGIN'] ?? 'not set',
            'user_agent' => $_SERVER['HTTP_USER_AGENT'] ?? 'not set',
            'referer' => $_SERVER['HTTP_REFERER'] ?? 'not set'
        ],
        'is_authenticated' => isAuthenticated(),
        'current_user_id' => getCurrentUserId(),
        'session_timeout' => SESSION_TIMEOUT,
        'current_time' => time(),
        'session_start_time' => $_SESSION['login_time'] ?? 'not set'
    ];
    
    if (isAuthenticated()) {
        $user = getCurrentUser();
        $debug_info['user_data'] = $user;
    }
    
    echo json_encode([
        'success' => true,
        'debug_info' => $debug_info
    ], JSON_PRETTY_PRINT);
    
} catch (Exception $e) {
    echo json_encode([
        'success' => false,
        'error' => $e->getMessage(),
        'debug_info' => [
            'session_id' => session_id(),
            'session_status' => session_status(),
            'session_data' => $_SESSION ?? []
        ]
    ], JSON_PRETTY_PRINT);
}
?> 