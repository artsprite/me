<?php
/**
 * Server Status API Endpoint
 * Returns current status of monitored servers
 */

require_once __DIR__ . '/../../config/config.php';

if ($_SERVER['REQUEST_METHOD'] !== 'GET') {
    errorResponse('Method not allowed', 405);
}

try {
    $pdo = getDBConnection();
    
    // Get all server statuses
    $stmt = $pdo->prepare("
        SELECT id, server_name, server_type, status, last_check, response_time, 
               player_count, max_players, notes, created_at, updated_at
        FROM server_status 
        ORDER BY server_name
    ");
    $stmt->execute();
    $servers = $stmt->fetchAll();
    
    // Get summary statistics
    $totalServers = count($servers);
    $onlineServers = 0;
    $totalPlayers = 0;
    $totalMaxPlayers = 0;
    
    foreach ($servers as $server) {
        if ($server['status'] === 'online') {
            $onlineServers++;
        }
        $totalPlayers += $server['player_count'];
        $totalMaxPlayers += $server['max_players'];
    }
    
    $summary = [
        'total_servers' => $totalServers,
        'online_servers' => $onlineServers,
        'offline_servers' => $totalServers - $onlineServers,
        'total_players' => $totalPlayers,
        'total_max_players' => $totalMaxPlayers,
        'uptime_percentage' => $totalServers > 0 ? round(($onlineServers / $totalServers) * 100, 2) : 0
    ];
    
    $response = [
        'servers' => $servers,
        'summary' => $summary,
        'last_updated' => date('Y-m-d H:i:s')
    ];
    
    successResponse($response);
    
} catch (Exception $e) {
    error_log("Server status error: " . $e->getMessage());
    errorResponse('Failed to load server status', 500);
}
?> 