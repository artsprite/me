<?php
// Enable error reporting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'config/config.php';

echo "<h2>Database Tables Debug</h2>";

try {
    $pdo = getDBConnection();
    echo "<p><strong>Database Connection:</strong> ✅ Connected</p>";
    
    // Check if required tables exist
    $required_tables = [
        'users',
        'bookings', 
        'media_files',
        'newsletter_subscribers',
        'journal_entries',
        'activity_logs'
    ];
    
    echo "<h3>Table Status:</h3>";
    foreach ($required_tables as $table) {
        try {
            $stmt = $pdo->query("SELECT COUNT(*) as count FROM $table");
            $result = $stmt->fetch();
            echo "<p><strong>$table:</strong> ✅ Exists (" . $result['count'] . " rows)</p>";
        } catch (Exception $e) {
            echo "<p><strong>$table:</strong> ❌ Error: " . $e->getMessage() . "</p>";
        }
    }
    
    // Test the specific queries from stats.php
    echo "<h3>Stats Queries Test:</h3>";
    
    // Test 1: Total users
    try {
        $stmt = $pdo->prepare("SELECT COUNT(*) as count FROM users");
        $stmt->execute();
        $result = $stmt->fetch();
        echo "<p><strong>Total Users Query:</strong> ✅ " . $result['count'] . " users</p>";
    } catch (Exception $e) {
        echo "<p><strong>Total Users Query:</strong> ❌ " . $e->getMessage() . "</p>";
    }
    
    // Test 2: Active bookings
    try {
        $stmt = $pdo->prepare("SELECT COUNT(*) as count FROM bookings WHERE start_time >= CURDATE()");
        $stmt->execute();
        $result = $stmt->fetch();
        echo "<p><strong>Active Bookings Query:</strong> ✅ " . $result['count'] . " bookings</p>";
    } catch (Exception $e) {
        echo "<p><strong>Active Bookings Query:</strong> ❌ " . $e->getMessage() . "</p>";
    }
    
    // Test 3: Media files
    try {
        $stmt = $pdo->prepare("SELECT COUNT(*) as count FROM media_files");
        $stmt->execute();
        $result = $stmt->fetch();
        echo "<p><strong>Media Files Query:</strong> ✅ " . $result['count'] . " files</p>";
    } catch (Exception $e) {
        echo "<p><strong>Media Files Query:</strong> ❌ " . $e->getMessage() . "</p>";
    }
    
    // Test 4: Newsletter subscribers
    try {
        $stmt = $pdo->prepare("SELECT COUNT(*) as count FROM newsletter_subscribers WHERE status = 'active'");
        $stmt->execute();
        $result = $stmt->fetch();
        echo "<p><strong>Newsletter Subscribers Query:</strong> ✅ " . $result['count'] . " subscribers</p>";
    } catch (Exception $e) {
        echo "<p><strong>Newsletter Subscribers Query:</strong> ❌ " . $e->getMessage() . "</p>";
    }
    
    // Test 5: Recent journal entries
    try {
        $stmt = $pdo->prepare("SELECT COUNT(*) as count FROM journal_entries WHERE created_at >= DATE_SUB(NOW(), INTERVAL 7 DAY)");
        $stmt->execute();
        $result = $stmt->fetch();
        echo "<p><strong>Recent Journal Entries Query:</strong> ✅ " . $result['count'] . " entries</p>";
    } catch (Exception $e) {
        echo "<p><strong>Recent Journal Entries Query:</strong> ❌ " . $e->getMessage() . "</p>";
    }
    
    // Test 6: Total revenue
    try {
        $stmt = $pdo->prepare("SELECT COALESCE(SUM(amount), 0) as total FROM bookings WHERE status = 'completed'");
        $stmt->execute();
        $result = $stmt->fetch();
        echo "<p><strong>Total Revenue Query:</strong> ✅ $" . $result['total'] . "</p>";
    } catch (Exception $e) {
        echo "<p><strong>Total Revenue Query:</strong> ❌ " . $e->getMessage() . "</p>";
    }
    
} catch (Exception $e) {
    echo "<p><strong>Error:</strong> " . $e->getMessage() . "</p>";
}
?> 