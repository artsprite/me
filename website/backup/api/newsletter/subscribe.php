<?php
/**
 * Newsletter Subscription API Endpoint
 * Handles newsletter subscription and unsubscription
 */

require_once __DIR__ . '/../../config/config.php';

// Add PHPMailer for sending emails
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . '/../../vendor/autoload.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    errorResponse('Method not allowed', 405);
}

// Get JSON input
$input = json_decode(file_get_contents('php://input'), true);

if (!$input) {
    errorResponse('Invalid JSON input');
}

$email = sanitizeInput($input['email'] ?? '');
$name = sanitizeInput($input['name'] ?? '');
$action = sanitizeInput($input['action'] ?? 'subscribe');

// Validate input
if (empty($email)) {
    errorResponse('Email is required');
}

if (!validateEmail($email)) {
    errorResponse('Invalid email format');
}

if (!in_array($action, ['subscribe', 'unsubscribe'])) {
    errorResponse('Invalid action');
}

try {
    $pdo = getDBConnection();
    
    if ($action === 'subscribe') {
        // Check if already subscribed
        $stmt = $pdo->prepare("SELECT id, status FROM newsletter_subscribers WHERE email = ?");
        $stmt->execute([$email]);
        $existing = $stmt->fetch();
        
        if ($existing) {
            if ($existing['status'] === 'active') {
                errorResponse('Email is already subscribed');
            } else {
                // Reactivate subscription
                $stmt = $pdo->prepare("
                    UPDATE newsletter_subscribers 
                    SET status = 'active', name = ?, unsubscribed_at = NULL
                    WHERE email = ?
                ");
                $stmt->execute([$name, $email]);
                sendWelcomeEmail($email, $name);
                successResponse(null, 'Subscription reactivated successfully');
            }
        } else {
            // Create new subscription
            $stmt = $pdo->prepare("
                INSERT INTO newsletter_subscribers (email, name, status)
                VALUES (?, ?, 'active')
            ");
            $stmt->execute([$email, $name]);
            sendWelcomeEmail($email, $name);
            successResponse(null, 'Subscribed successfully');
        }
    } elseif ($action === 'unsubscribe') {
        // Unsubscribe
        $stmt = $pdo->prepare("
            UPDATE newsletter_subscribers 
            SET status = 'unsubscribed', unsubscribed_at = NOW()
            WHERE email = ?
        ");
        $stmt->execute([$email]);
        
        if ($stmt->rowCount() === 0) {
            errorResponse('Email not found in subscribers list');
        }
        
        successResponse(null, 'Unsubscribed successfully');
    }
    
} catch (Exception $e) {
    error_log("Newsletter subscription error: " . $e->getMessage());
    errorResponse('Failed to process subscription', 500);
}

function sendWelcomeEmail($toEmail, $toName) {
    $mail = new PHPMailer(true);
    try {
        //Server settings
        $mail->isSMTP();
        $mail->Host       = 'localhost';
        $mail->SMTPAuth   = false;
        $mail->SMTPSecure = false;
        $mail->Port       = 25;
        $mail->CharSet    = 'UTF-8';

        //Recipients
        $mail->setFrom('info@salinashelton.com', 'Salina Shelton Newsletter');
        $mail->addAddress($toEmail, $toName ?: '');

        //Content
        $mail->isHTML(true);
        $mail->Subject = 'Welcome to the Salina Shelton Newsletter!';
        $firstName = $toName ? explode(' ', $toName)[0] : 'Friend';
        $mail->Body    = "<p>Hi $firstName,</p>"
            . "<p>Welcome to the Salina Shelton community! We're so glad to have you with us. You'll receive wellness tips, inspiration, and updates straight to your inbox. If you ever have questions or want to say hello, just reply to this email!</p>"
            . "<p>Wishing you peace and joy,<br>Salina Shelton</p>";
        $mail->AltBody = "Hi $firstName,\n\nWelcome to the Salina Shelton community! We're so glad to have you with us. You'll receive wellness tips, inspiration, and updates straight to your inbox. If you ever have questions or want to say hello, just reply to this email!\n\nWishing you peace and joy,\nSalina Shelton";

        $mail->send();
    } catch (Exception $e) {
        error_log('Welcome email could not be sent. Mailer Error: ' . $mail->ErrorInfo);
    }
}
?> 