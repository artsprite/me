<?php
/**
 * Test Newsletter Subscription
 * Simple test to verify the newsletter subscription works
 */

// Simulate a POST request to the newsletter subscription endpoint
$_SERVER['REQUEST_METHOD'] = 'POST';
$_SERVER['HTTP_ORIGIN'] = 'https://me.salinashelton.com';

// Simulate JSON input
$input = [
    'email' => 'test@example.com',
    'name' => 'Test User',
    'action' => 'subscribe'
];

// Set the input for the endpoint
file_put_contents('php://input', json_encode($input));

// Include the newsletter subscription endpoint
require_once 'api/newsletter/subscribe.php';
?> 