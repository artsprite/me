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

try {
    $pdo = getDBConnection();
    $activities = [];
    
    // Get recent bookings
    $stmt = $pdo->prepare("
        SELECT 'New booking created' as description, created_at as time, 'booking' as type
        FROM bookings 
        WHERE created_at >= DATE_SUB(NOW(), INTERVAL 7 DAY)
        ORDER BY created_at DESC 
        LIMIT 5
    ");
    $stmt->execute();
    $bookings = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $activities = array_merge($activities, $bookings);
    
    // Get recent user registrations
    $stmt = $pdo->prepare("
        SELECT CONCAT('New user registered: ', email) as description, created_at as time, 'user' as type
        FROM users 
        WHERE created_at >= DATE_SUB(NOW(), INTERVAL 7 DAY)
        ORDER BY created_at DESC 
        LIMIT 5
    ");
    $stmt->execute();
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $activities = array_merge($activities, $users);
    
    // Get recent media uploads
    $stmt = $pdo->prepare("
        SELECT CONCAT('Media uploaded: ', filename) as description, created_at as time, 'media' as type
        FROM media_files 
        WHERE created_at >= DATE_SUB(NOW(), INTERVAL 7 DAY)
        ORDER BY created_at DESC 
        LIMIT 5
    ");
    $stmt->execute();
    $media = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $activities = array_merge($activities, $media);
    
    // Get recent newsletter subscriptions
    $stmt = $pdo->prepare("
        SELECT CONCAT('Newsletter subscription: ', email) as description, subscribed_at as time, 'newsletter' as type
        FROM newsletter_subscribers 
        WHERE subscribed_at >= DATE_SUB(NOW(), INTERVAL 7 DAY)
        ORDER BY subscribed_at DESC 
        LIMIT 5
    ");
    $stmt->execute();
    $newsletters = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $activities = array_merge($activities, $newsletters);
    
    // Sort all activities by time (most recent first)
    usort($activities, function($a, $b) {
        return strtotime($b['time']) - strtotime($a['time']);
    });
    
    // Take only the 10 most recent activities
    $activities = array_slice($activities, 0, 10);
    
    // Format the time for display
    foreach ($activities as &$activity) {
        $timestamp = strtotime($activity['time']);
        $now = time();
        $diff = $now - $timestamp;
        
        if ($diff < 60) {
            $activity['time'] = 'Just now';
        } elseif ($diff < 3600) {
            $minutes = floor($diff / 60);
            $activity['time'] = $minutes . ' minute' . ($minutes > 1 ? 's' : '') . ' ago';
        } elseif ($diff < 86400) {
            $hours = floor($diff / 3600);
            $activity['time'] = $hours . ' hour' . ($hours > 1 ? 's' : '') . ' ago';
        } else {
            $days = floor($diff / 86400);
            $activity['time'] = $days . ' day' . ($days > 1 ? 's' : '') . ' ago';
        }
    }
    
    header('Content-Type: application/json');
    echo json_encode($activities);
    
} catch (PDOException $e) {
    http_response_code(500);
    echo json_encode(['error' => 'Database error: ' . $e->getMessage()]);
}
?> 