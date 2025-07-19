<?php
/**
 * List Newsletter Campaigns API Endpoint
 * Returns list of newsletter campaigns (admin only)
 */

require_once __DIR__ . '/../../config/config.php';

if ($_SERVER['REQUEST_METHOD'] !== 'GET') {
    errorResponse('Method not allowed', 405);
}

// Require admin access
requireAdmin();

try {
    $pdo = getDBConnection();
    
    // Get query parameters
    $page = max(1, intval($_GET['page'] ?? 1));
    $limit = min(50, max(1, intval($_GET['limit'] ?? 20)));
    $offset = ($page - 1) * $limit;
    
    $status = sanitizeInput($_GET['status'] ?? '');
    
    // Build query
    $whereConditions = ['c.created_by = ?'];
    $params = [getCurrentUserId()];
    
    if (!empty($status)) {
        $whereConditions[] = 'c.status = ?';
        $params[] = $status;
    }
    
    $whereClause = implode(' AND ', $whereConditions);
    
    // Get total count
    $countStmt = $pdo->prepare("
        SELECT COUNT(*) as total 
        FROM newsletter_campaigns c 
        WHERE {$whereClause}
    ");
    $countStmt->execute($params);
    $total = $countStmt->fetch()['total'];
    
    // Get campaigns
    $stmt = $pdo->prepare("
        SELECT c.*, u.name as created_by_name
        FROM newsletter_campaigns c
        LEFT JOIN users u ON c.created_by = u.id
        WHERE {$whereClause}
        ORDER BY c.created_at DESC
        LIMIT ? OFFSET ?
    ");
    
    $params[] = $limit;
    $params[] = $offset;
    $stmt->execute($params);
    $campaigns = $stmt->fetchAll();
    
    // Get subscriber statistics
    $subscriberStmt = $pdo->prepare("
        SELECT 
            COUNT(*) as total_subscribers,
            SUM(CASE WHEN status = 'active' THEN 1 ELSE 0 END) as active_subscribers,
            SUM(CASE WHEN status = 'unsubscribed' THEN 1 ELSE 0 END) as unsubscribed_count
        FROM newsletter_subscribers
    ");
    $subscriberStmt->execute();
    $subscriberStats = $subscriberStmt->fetch();
    
    // Get campaign statistics
    $campaignStatsStmt = $pdo->prepare("
        SELECT 
            status,
            COUNT(*) as count
        FROM newsletter_campaigns 
        WHERE created_by = ?
        GROUP BY status
    ");
    $campaignStatsStmt->execute([getCurrentUserId()]);
    $campaignStats = $campaignStatsStmt->fetchAll();
    
    $response = [
        'campaigns' => $campaigns,
        'pagination' => [
            'page' => $page,
            'limit' => $limit,
            'total' => $total,
            'pages' => ceil($total / $limit)
        ],
        'statistics' => [
            'subscribers' => $subscriberStats,
            'campaigns' => $campaignStats
        ]
    ];
    
    successResponse($response);
    
} catch (Exception $e) {
    error_log("List newsletter campaigns error: " . $e->getMessage());
    errorResponse('Failed to load campaigns', 500);
}
?> 