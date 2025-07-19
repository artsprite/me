<?php
require_once 'config/config.php';

// Add PHPMailer for sending emails
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once 'vendor/autoload.php';

echo "Testing email functionality...\n";

function sendWelcomeEmail($toEmail, $toName) {
    $mail = new PHPMailer(true);
    try {
        echo "Setting up PHPMailer...\n";
        
        //Server settings
        $mail->isSMTP();
        $mail->Host       = 'localhost';
        $mail->SMTPAuth   = false;
        $mail->SMTPSecure = false;
        $mail->Port       = 25;
        $mail->CharSet    = 'UTF-8';
        
        echo "SMTP settings configured.\n";

        //Recipients
        $mail->setFrom('info@salinashelton.com', 'Salina Shelton Newsletter');
        $mail->addAddress($toEmail, $toName ?: '');
        
        echo "Recipients set.\n";

        //Content
        $mail->isHTML(true);
        $mail->Subject = 'Welcome to the Salina Shelton Newsletter!';
        $firstName = $toName ? explode(' ', $toName)[0] : 'Friend';
        $mail->Body    = "<p>Hi $firstName,</p>"
            . "<p>Welcome to the Salina Shelton community! We're so glad to have you with us. You'll receive wellness tips, inspiration, and updates straight to your inbox. If you ever have questions or want to say hello, just reply to this email!</p>"
            . "<p>Wishing you peace and joy,<br>Salina Shelton</p>";
        $mail->AltBody = "Hi $firstName,\n\nWelcome to the Salina Shelton community! We're so glad to have you with us. You'll receive wellness tips, inspiration, and updates straight to your inbox. If you ever have questions or want to say hello, just reply to this email!\n\nWishing you peace and joy,\nSalina Shelton";
        
        echo "Email content prepared.\n";
        echo "Attempting to send email to: $toEmail\n";

        $mail->send();
        echo "Email sent successfully!\n";
        return true;
    } catch (Exception $e) {
        echo "Email could not be sent. Mailer Error: " . $mail->ErrorInfo . "\n";
        echo "Exception: " . $e->getMessage() . "\n";
        return false;
    }
}

// Test with a sample email
$result = sendWelcomeEmail('test@example.com', 'Test User');
echo "Test result: " . ($result ? "SUCCESS" : "FAILED") . "\n";
?> 