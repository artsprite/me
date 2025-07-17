<?php
require_once 'config/database.php';

try {
    $pdo = getDBConnection();
    
    echo "Setting up database schema...\n";
    
    // Read and execute the schema file
    $schema = file_get_contents('database/schema.sql');
    
    // Split the schema into individual statements
    $statements = array_filter(array_map('trim', explode(';', $schema)));
    
    foreach ($statements as $statement) {
        if (!empty($statement)) {
            try {
                $pdo->exec($statement);
                echo "✓ Executed: " . substr($statement, 0, 50) . "...\n";
            } catch (PDOException $e) {
                // Ignore errors for statements that might already exist
                if (strpos($e->getMessage(), 'already exists') === false) {
                    echo "⚠ Warning: " . $e->getMessage() . "\n";
                }
            }
        }
    }
    
    echo "\nDatabase setup completed!\n";
    
    // Now set up the admin user
    echo "\nSetting up admin user...\n";
    
    // Check if admin user already exists
    $stmt = $pdo->prepare("SELECT id FROM users WHERE email = 'admin@salinashelton.com'");
    $stmt->execute();
    $existingUser = $stmt->fetch();
    
    if ($existingUser) {
        // Update existing admin user with new password
        $adminPassword = password_hash('admin123', PASSWORD_DEFAULT);
        $stmt = $pdo->prepare("UPDATE users SET password = ?, name = 'Admin' WHERE email = 'admin@salinashelton.com'");
        $stmt->execute([$adminPassword]);
        echo "✓ Admin user updated successfully!\n";
    } else {
        // Create new admin user
        $adminPassword = password_hash('admin123', PASSWORD_DEFAULT);
        $stmt = $pdo->prepare("INSERT INTO users (name, email, password, role, status) VALUES (?, ?, ?, ?, ?)");
        $stmt->execute(['Admin', 'admin@salinashelton.com', $adminPassword, 'admin', 'active']);
        echo "✓ Admin user created successfully!\n";
    }
    
    // Create a regular user for testing
    $userPassword = password_hash('user123', PASSWORD_DEFAULT);
    $stmt = $pdo->prepare("INSERT IGNORE INTO users (name, email, password, role, status) VALUES (?, ?, ?, ?, ?)");
    $stmt->execute(['Test User', 'user@salinashelton.com', $userPassword, 'user', 'active']);
    echo "✓ Test user created successfully!\n";
    
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
    echo "\nOr access the admin panel at:\n";
    echo "http://your-server-ip/ (backend admin panel)\n";
    
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "\n";
}
?> 