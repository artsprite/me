<?php
/**
 * Debug Newsletter Subscription
 * Test the newsletter subscription endpoint step by step
 */

// Set up the environment
$_SERVER['REQUEST_METHOD'] = 'POST';
$_SERVER['HTTP_ORIGIN'] = 'https://me.salinashelton.com';
$_SERVER['HTTP_CONTENT_TYPE'] = 'application/json';

// Simulate JSON input
$input = [
    'email' => 'test@example.com',
    'name' => 'Test User',
    'action' => 'subscribe'
];

// Set the input for the endpoint
file_put_contents('php://input', json_encode($input));

// Start output buffering to capture any output
ob_start();

try {
    // Include the config first
    require_once 'config/config.php';
    
    echo "Config loaded successfully\n";
    
    // Test database connection
    $pdo = getDBConnection();
    echo "Database connection successful\n";
    
    // Test the newsletter subscription logic directly
    $email = sanitizeInput($input['email']);
    $name = sanitizeInput($input['name']);
    $action = sanitizeInput($input['action']);
    
    echo "Input sanitized: email=$email, name=$name, action=$action\n";
    
    if ($action === 'subscribe') {
        // Check if already subscribed
        $stmt = $pdo->prepare("SELECT id, status FROM newsletter_subscribers WHERE email = ?");
        $stmt->execute([$email]);
        $existing = $stmt->fetch();
        
        echo "Existing subscription check: " . ($existing ? "found" : "not found") . "\n";
        
        if ($existing) {
            if ($existing['status'] === 'active') {
                echo "Already subscribed\n";
            } else {
                // Reactivate subscription
                $stmt = $pdo->prepare("
                    UPDATE newsletter_subscribers 
                    SET status = 'active', name = ?, unsubscribed_at = NULL
                    WHERE email = ?
                ");
                $stmt->execute([$name, $email]);
                echo "Subscription reactivated\n";
            }
        } else {
            // Create new subscription
            $stmt = $pdo->prepare("
                INSERT INTO newsletter_subscribers (email, name, status)
                VALUES (?, ?, 'active')
            ");
            $stmt->execute([$email, $name]);
            echo "New subscription created\n";
        }
    }
    
    echo "Newsletter subscription test completed successfully\n";
    
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "\n";
    echo "File: " . $e->getFile() . "\n";
    echo "Line: " . $e->getLine() . "\n";
    echo "Trace: " . $e->getTraceAsString() . "\n";
}

// Get the output
$output = ob_get_clean();
echo $output;
?> 