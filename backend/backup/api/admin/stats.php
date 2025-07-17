<?php
// Enable error reporting for debugging
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

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
    $stats = [];
    
    // Get total users
    $stmt = $pdo->prepare("SELECT COUNT(*) as count FROM users");
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    $stats['totalUsers'] = (int)$result['count'];
    
    // Get active bookings (bookings scheduled for today or future)
    $stmt = $pdo->prepare("SELECT COUNT(*) as count FROM bookings WHERE start_time >= CURDATE()");
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    $stats['activeBookings'] = (int)$result['count'];
    
    // Get total media files
    $stmt = $pdo->prepare("SELECT COUNT(*) as count FROM media_files");
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    $stats['mediaFiles'] = (int)$result['count'];
    
    // Get newsletter subscribers
    $stmt = $pdo->prepare("SELECT COUNT(*) as count FROM newsletter_subscribers WHERE status = 'active'");
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    $stats['newsletterSubscribers'] = (int)$result['count'];
    
    // Get recent journal entries (last 7 days)
    $stmt = $pdo->prepare("SELECT COUNT(*) as count FROM journal_entries WHERE created_at >= DATE_SUB(NOW(), INTERVAL 7 DAY)");
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    $stats['recentJournalEntries'] = (int)$result['count'];
    
    // Get total revenue (sum of all booking payments)
    $stmt = $pdo->prepare("SELECT COALESCE(SUM(amount), 0) as total FROM bookings WHERE status = 'completed'");
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    $stats['totalRevenue'] = (float)$result['total'];
    
    header('Content-Type: application/json');
    echo json_encode($stats);
    
} catch (PDOException $e) {
    http_response_code(500);
    echo json_encode(['error' => 'Database error: ' . $e->getMessage()]);
}
?> 