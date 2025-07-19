<?php
require_once 'config/database.php';

try {
    $pdo = getDBConnection();
    
    // Check if admin user already exists
    $stmt = $pdo->prepare("SELECT id FROM users WHERE email = 'admin@salinashelton.com'");
    $stmt->execute();
    $existingUser = $stmt->fetch();
    
    if ($existingUser) {
        // Update existing admin user with new password
        $adminPassword = password_hash('admin123', PASSWORD_DEFAULT);
        $stmt = $pdo->prepare("UPDATE users SET password = ?, name = 'Admin' WHERE email = 'admin@salinashelton.com'");
        $stmt->execute([$adminPassword]);
        echo "Admin user updated successfully!\n";
    } else {
        // Create new admin user
        $adminPassword = password_hash('admin123', PASSWORD_DEFAULT);
        $stmt = $pdo->prepare("INSERT INTO users (name, email, password, role, status) VALUES (?, ?, ?, ?, ?)");
        $stmt->execute(['Admin', 'admin@salinashelton.com', $adminPassword, 'admin', 'active']);
        echo "Admin user created successfully!\n";
    }
    
    // Create a regular user for testing
    $userPassword = password_hash('user123', PASSWORD_DEFAULT);
    $stmt = $pdo->prepare("INSERT IGNORE INTO users (name, email, password, role, status) VALUES (?, ?, ?, ?, ?)");
    $stmt->execute(['Test User', 'user@salinashelton.com', $userPassword, 'user', 'active']);
    
    echo "\n=== Default Login Credentials ===\n";
    echo "Admin User:\n";
    echo "  Email: admin@salinashelton.com\n";
    echo "  Password: admin123\n";
    echo "  Role: Admin\n\n";
    echo "Regular User:\n";
    echo "  Email: user@salinashelton.com\n";
    echo "  Password: user123\n";
    echo "  Role: User\n\n";
    echo "You can use these credentials to log in to the frontend at:\n";
    echo "http://your-server-ip:3000/login\n";
    
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage() . "\n";
}
?> 