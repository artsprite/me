<?php
// Enable error reporting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'config/config.php';

echo "<h2>Login Debug Information</h2>";

try {
    // Test database connection
    $pdo = getDBConnection();
    echo "<p><strong>Database Connection:</strong> ✅ Connected</p>";
    
    // Check if admin user exists
    $stmt = $pdo->prepare("SELECT id, email, password, role, status FROM users WHERE email = ?");
    $stmt->execute(['admin@salinashelton.com']);
    $user = $stmt->fetch();
    
    if ($user) {
        echo "<p><strong>Admin User Found:</strong> ✅</p>";
        echo "<p>ID: " . $user['id'] . "</p>";
        echo "<p>Email: " . $user['email'] . "</p>";
        echo "<p>Role: " . $user['role'] . "</p>";
        echo "<p>Status: " . $user['status'] . "</p>";
        echo "<p>Password Hash: " . substr($user['password'], 0, 20) . "...</p>";
        
        // Test password verification
        $test_password = 'admin123';
        if (password_verify($test_password, $user['password'])) {
            echo "<p><strong>Password Verification:</strong> ✅ Correct</p>";
        } else {
            echo "<p><strong>Password Verification:</strong> ❌ Failed</p>";
            echo "<p>Test password: " . $test_password . "</p>";
        }
        
        // Show all users for debugging
        echo "<h3>All Users in Database:</h3>";
        $stmt = $pdo->query("SELECT id, email, role, status FROM users");
        $users = $stmt->fetchAll();
        
        echo "<table border='1'>";
        echo "<tr><th>ID</th><th>Email</th><th>Role</th><th>Status</th></tr>";
        foreach ($users as $u) {
            echo "<tr>";
            echo "<td>" . $u['id'] . "</td>";
            echo "<td>" . $u['email'] . "</td>";
            echo "<td>" . $u['role'] . "</td>";
            echo "<td>" . $u['status'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        
    } else {
        echo "<p><strong>Admin User:</strong> ❌ Not found</p>";
        
        // Show all users
        echo "<h3>All Users in Database:</h3>";
        $stmt = $pdo->query("SELECT id, email, role, status FROM users");
        $users = $stmt->fetchAll();
        
        if (empty($users)) {
            echo "<p>No users found in database</p>";
        } else {
            echo "<table border='1'>";
            echo "<tr><th>ID</th><th>Email</th><th>Role</th><th>Status</th></tr>";
            foreach ($users as $u) {
                echo "<tr>";
                echo "<td>" . $u['id'] . "</td>";
                echo "<td>" . $u['email'] . "</td>";
                echo "<td>" . $u['role'] . "</td>";
                echo "<td>" . $u['status'] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
        }
    }
    
} catch (Exception $e) {
    echo "<p><strong>Error:</strong> " . $e->getMessage() . "</p>";
}

echo "<h3>Session Information:</h3>";
echo "<p>Session Status: " . session_status() . "</p>";
echo "<p>Session ID: " . session_id() . "</p>";
echo "<p>Session Data: " . print_r($_SESSION, true) . "</p>";
?> 