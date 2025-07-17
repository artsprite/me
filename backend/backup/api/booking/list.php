<?php
/**
 * List Bookings API Endpoint
 * Returns list of bookings with filtering and pagination
 */

require_once __DIR__ . '/../../config/config.php';

if ($_SERVER['REQUEST_METHOD'] !== 'GET') {
    errorResponse('Method not allowed', 405);
}

// Require authentication
requireAuth();

try {
    $pdo = getDBConnection();
    
    // Get query parameters
    $page = max(1, intval($_GET['page'] ?? 1));
    $limit = min(50, max(1, intval($_GET['limit'] ?? 20)));
    $offset = ($page - 1) * $limit;
    
    $status = sanitizeInput($_GET['status'] ?? '');
    $sessionType = sanitizeInput($_GET['session_type'] ?? '');
    $startDate = sanitizeInput($_GET['start_date'] ?? '');
    $endDate = sanitizeInput($_GET['end_date'] ?? '');
    
    // Build query
    $whereConditions = ['b.user_id = ?'];
    $params = [getCurrentUserId()];
    
    if (!empty($status)) {
        $whereConditions[] = 'b.status = ?';
        $params[] = $status;
    }
    
    if (!empty($sessionType)) {
        $whereConditions[] = 'b.session_type = ?';
        $params[] = $sessionType;
    }
    
    if (!empty($startDate)) {
        $whereConditions[] = 'DATE(b.start_time) >= ?';
        $params[] = $startDate;
    }
    
    if (!empty($endDate)) {
        $whereConditions[] = 'DATE(b.start_time) <= ?';
        $params[] = $endDate;
    }
    
    $whereClause = implode(' AND ', $whereConditions);
    
    // Get total count
    $countStmt = $pdo->prepare("
        SELECT COUNT(*) as total 
        FROM bookings b 
        WHERE {$whereClause}
    ");
    $countStmt->execute($params);
    $total = $countStmt->fetch()['total'];
    
    // Get bookings
    $stmt = $pdo->prepare("
        SELECT b.*, u.name as therapist_name
        FROM bookings b
        LEFT JOIN users u ON b.therapist_id = u.id
        WHERE {$whereClause}
        ORDER BY b.start_time DESC
        LIMIT ? OFFSET ?
    ");
    
    $params[] = $limit;
    $params[] = $offset;
    $stmt->execute($params);
    $bookings = $stmt->fetchAll();
    
    // Get upcoming bookings count
    $upcomingStmt = $pdo->prepare("
        SELECT COUNT(*) as count
        FROM bookings 
        WHERE user_id = ? AND start_time > NOW() AND status IN ('pending', 'confirmed')
    ");
    $upcomingStmt->execute([getCurrentUserId()]);
    $upcomingCount = $upcomingStmt->fetch()['count'];
    
    // Get status counts
    $statusStmt = $pdo->prepare("
        SELECT status, COUNT(*) as count
        FROM bookings 
        WHERE user_id = ?
        GROUP BY status
    ");
    $statusStmt->execute([getCurrentUserId()]);
    $statusCounts = $statusStmt->fetchAll();
    
    $response = [
        'bookings' => $bookings,
        'pagination' => [
            'page' => $page,
            'limit' => $limit,
            'total' => $total,
            'pages' => ceil($total / $limit)
        ],
        'summary' => [
            'upcoming_count' => $upcomingCount,
            'status_counts' => $statusCounts
        ]
    ];
    
    successResponse($response);
    
} catch (Exception $e) {
    error_log("List bookings error: " . $e->getMessage());
    errorResponse('Failed to load bookings', 500);
}
?> 