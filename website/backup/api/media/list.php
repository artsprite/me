<?php
/**
 * Media List API Endpoint
 * Returns list of media files with filtering and pagination
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
    
    $fileType = sanitizeInput($_GET['type'] ?? '');
    $folder = sanitizeInput($_GET['folder'] ?? '');
    $search = sanitizeInput($_GET['search'] ?? '');
    $tags = sanitizeInput($_GET['tags'] ?? '');
    
    // Build query
    $whereConditions = ['user_id = ?'];
    $params = [getCurrentUserId()];
    
    if (!empty($fileType)) {
        $whereConditions[] = 'file_type = ?';
        $params[] = $fileType;
    }
    
    if (!empty($folder)) {
        $whereConditions[] = 'folder = ?';
        $params[] = $folder;
    }
    
    if (!empty($search)) {
        $whereConditions[] = '(original_name LIKE ? OR title LIKE ? OR description LIKE ?)';
        $searchTerm = "%{$search}%";
        $params[] = $searchTerm;
        $params[] = $searchTerm;
        $params[] = $searchTerm;
    }
    
    if (!empty($tags)) {
        $whereConditions[] = 'JSON_CONTAINS(tags, ?)';
        $params[] = json_encode($tags);
    }
    
    $whereClause = implode(' AND ', $whereConditions);
    
    // Get total count
    $countStmt = $pdo->prepare("SELECT COUNT(*) as total FROM media_files WHERE {$whereClause}");
    $countStmt->execute($params);
    $total = $countStmt->fetch()['total'];
    
    // Get files
    $stmt = $pdo->prepare("
        SELECT id, original_name, file_name, file_path, file_type, file_size, mime_type, 
               title, description, tags, folder, is_public, created_at, updated_at
        FROM media_files 
        WHERE {$whereClause}
        ORDER BY created_at DESC
        LIMIT ? OFFSET ?
    ");
    
    $params[] = $limit;
    $params[] = $offset;
    $stmt->execute($params);
    $files = $stmt->fetchAll();
    
    // Get unique folders for filtering
    $folderStmt = $pdo->prepare("
        SELECT DISTINCT folder 
        FROM media_files 
        WHERE user_id = ? AND folder IS NOT NULL
        ORDER BY folder
    ");
    $folderStmt->execute([getCurrentUserId()]);
    $folders = $folderStmt->fetchAll(PDO::FETCH_COLUMN);
    
    // Get file type counts
    $typeStmt = $pdo->prepare("
        SELECT file_type, COUNT(*) as count
        FROM media_files 
        WHERE user_id = ?
        GROUP BY file_type
    ");
    $typeStmt->execute([getCurrentUserId()]);
    $typeCounts = $typeStmt->fetchAll();
    
    $response = [
        'files' => $files,
        'pagination' => [
            'page' => $page,
            'limit' => $limit,
            'total' => $total,
            'pages' => ceil($total / $limit)
        ],
        'filters' => [
            'folders' => $folders,
            'type_counts' => $typeCounts
        ]
    ];
    
    successResponse($response);
    
} catch (Exception $e) {
    error_log("Media list error: " . $e->getMessage());
    errorResponse('Failed to load media files', 500);
}
?> 