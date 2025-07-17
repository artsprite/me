<?php
/**
 * Test Newsletter Endpoint
 * Simple test to debug the 500 error
 */

require_once __DIR__ . '/../../config/config.php';

// Set CORS headers
header('Access-Control-Allow-Origin: https://www.salinashelton.com');
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type, Authorization');
header('Access-Control-Allow-Credentials: true');

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit();
}

try {
    // Test 1: Check if session exists
    if (!isset($_SESSION['user_id'])) {
        echo json_encode(['error' => 'No session found', 'session' => $_SESSION]);
        exit();
    }
    
    // Test 2: Check if user is admin
    if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
        echo json_encode(['error' => 'Not admin', 'role' => $_SESSION['role'] ?? 'not set']);
        exit();
    }
    
    // Test 3: Check database connection
    $pdo = getDBConnection();
    
    // Test 4: Check if tables exist
    $stmt = $pdo->query("SHOW TABLES LIKE 'newsletter_campaigns'");
    $campaignsTable = $stmt->fetch();
    
    $stmt = $pdo->query("SHOW TABLES LIKE 'newsletter_subscribers'");
    $subscribersTable = $stmt->fetch();
    
    echo json_encode([
        'success' => true,
        'message' => 'All tests passed',
        'session' => [
            'user_id' => $_SESSION['user_id'],
            'role' => $_SESSION['role']
        ],
        'tables' => [
            'campaigns' => !empty($campaignsTable),
            'subscribers' => !empty($subscribersTable)
        ]
    ]);
    
} catch (Exception $e) {
    echo json_encode([
        'error' => 'Exception occurred',
        'message' => $e->getMessage(),
        'file' => $e->getFile(),
        'line' => $e->getLine()
    ]);
}
?> 