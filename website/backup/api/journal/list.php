<?php
/**
 * List Journal Entries API Endpoint
 * Returns list of journal entries with filtering and pagination
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
    
    $search = sanitizeInput($_GET['search'] ?? '');
    $moodRating = intval($_GET['mood_rating'] ?? 0);
    $tags = sanitizeInput($_GET['tags'] ?? '');
    $startDate = sanitizeInput($_GET['start_date'] ?? '');
    $endDate = sanitizeInput($_GET['end_date'] ?? '');
    
    // Build query
    $whereConditions = ['user_id = ?'];
    $params = [getCurrentUserId()];
    
    if (!empty($search)) {
        $whereConditions[] = '(title LIKE ? OR content LIKE ?)';
        $searchTerm = "%{$search}%";
        $params[] = $searchTerm;
        $params[] = $searchTerm;
    }
    
    if ($moodRating > 0) {
        $whereConditions[] = 'mood_rating = ?';
        $params[] = $moodRating;
    }
    
    if (!empty($tags)) {
        $whereConditions[] = 'JSON_CONTAINS(tags, ?)';
        $params[] = json_encode($tags);
    }
    
    if (!empty($startDate)) {
        $whereConditions[] = 'DATE(created_at) >= ?';
        $params[] = $startDate;
    }
    
    if (!empty($endDate)) {
        $whereConditions[] = 'DATE(created_at) <= ?';
        $params[] = $endDate;
    }
    
    $whereClause = implode(' AND ', $whereConditions);
    
    // Get total count
    $countStmt = $pdo->prepare("SELECT COUNT(*) as total FROM journal_entries WHERE {$whereClause}");
    $countStmt->execute($params);
    $total = $countStmt->fetch()['total'];
    
    // Get entries
    $stmt = $pdo->prepare("
        SELECT id, title, content, mood_rating, tags, is_private, created_at, updated_at
        FROM journal_entries 
        WHERE {$whereClause}
        ORDER BY created_at DESC
        LIMIT ? OFFSET ?
    ");
    
    $params[] = $limit;
    $params[] = $offset;
    $stmt->execute($params);
    $entries = $stmt->fetchAll();
    
    // Get mood statistics
    $moodStmt = $pdo->prepare("
        SELECT mood_rating, COUNT(*) as count
        FROM journal_entries 
        WHERE user_id = ? AND mood_rating IS NOT NULL
        GROUP BY mood_rating
        ORDER BY mood_rating
    ");
    $moodStmt->execute([getCurrentUserId()]);
    $moodStats = $moodStmt->fetchAll();
    
    // Get total entries count
    $totalStmt = $pdo->prepare("
        SELECT COUNT(*) as total_entries
        FROM journal_entries 
        WHERE user_id = ?
    ");
    $totalStmt->execute([getCurrentUserId()]);
    $totalEntries = $totalStmt->fetch()['total_entries'];
    
    $response = [
        'entries' => $entries,
        'pagination' => [
            'page' => $page,
            'limit' => $limit,
            'total' => $total,
            'pages' => ceil($total / $limit)
        ],
        'statistics' => [
            'total_entries' => $totalEntries,
            'mood_stats' => $moodStats
        ]
    ];
    
    successResponse($response);
    
} catch (Exception $e) {
    error_log("List journal entries error: " . $e->getMessage());
    errorResponse('Failed to load journal entries', 500);
}
?> 