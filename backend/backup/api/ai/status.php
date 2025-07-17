<?php
require_once __DIR__ . '/../../config/config.php';

// Check if user is authenticated and is admin
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    http_response_code(401);
    echo json_encode(['error' => 'Unauthorized']);
    exit();
}

if ($_SERVER['REQUEST_METHOD'] !== 'GET') {
    http_response_code(405);
    echo json_encode(['error' => 'Method not allowed']);
    exit();
}

// Return dummy AI status data
header('Content-Type: application/json');
echo json_encode([
    'status' => 'online',
    'models' => 2,
    'available_models' => ['dummy-model-1', 'dummy-model-2']
]);
?> 