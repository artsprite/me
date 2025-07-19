<?php
/**
 * Update Server Status API Endpoint
 * Updates server status information (admin only)
 */

require_once __DIR__ . '/../../config/config.php';

if ($_SERVER['REQUEST_METHOD'] !== 'PUT') {
    errorResponse('Method not allowed', 405);
}

// Require admin access
requireAdmin();

$serverId = intval($_GET['id'] ?? 0);

if ($serverId <= 0) {
    errorResponse('Invalid server ID');
}

// Get JSON input
$input = json_decode(file_get_contents('php://input'), true);

if (!$input) {
    errorResponse('Invalid JSON input');
}

$status = sanitizeInput($input['status'] ?? '');
$playerCount = intval($input['player_count'] ?? 0);
$maxPlayers = intval($input['max_players'] ?? 0);
$responseTime = intval($input['response_time'] ?? 0);
$notes = sanitizeInput($input['notes'] ?? '');

// Validate input
$validStatuses = ['online', 'offline', 'maintenance'];
if (!in_array($status, $validStatuses)) {
    errorResponse('Invalid status');
}

if ($playerCount < 0 || $maxPlayers < 0 || $responseTime < 0) {
    errorResponse('Invalid numeric values');
}

if ($playerCount > $maxPlayers) {
    errorResponse('Player count cannot exceed max players');
}

try {
    $pdo = getDBConnection();
    
    // Check if server exists
    $stmt = $pdo->prepare("SELECT id, server_name FROM server_status WHERE id = ?");
    $stmt->execute([$serverId]);
    $server = $stmt->fetch();
    
    if (!$server) {
        errorResponse('Server not found', 404);
    }
    
    // Update server status
    $stmt = $pdo->prepare("
        UPDATE server_status 
        SET status = ?, player_count = ?, max_players = ?, response_time = ?, 
            notes = ?, last_check = NOW(), updated_at = NOW()
        WHERE id = ?
    ");
    
    $stmt->execute([
        $status,
        $playerCount,
        $maxPlayers,
        $responseTime,
        $notes,
        $serverId
    ]);
    
    // Get updated server information
    $stmt = $pdo->prepare("
        SELECT id, server_name, server_type, status, last_check, response_time, 
               player_count, max_players, notes, created_at, updated_at
        FROM server_status 
        WHERE id = ?
    ");
    $stmt->execute([$serverId]);
    $updatedServer = $stmt->fetch();
    
    // Log activity
    logActivity(getCurrentUserId(), 'server_update', "Updated server status: {$server['server_name']}");
    
    successResponse($updatedServer, 'Server status updated successfully');
    
} catch (Exception $e) {
    error_log("Update server status error: " . $e->getMessage());
    errorResponse('Failed to update server status', 500);
}
?> 