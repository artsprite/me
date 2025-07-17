<?php
/**
 * Send Newsletter API Endpoint
 * Sends newsletter to all active subscribers (admin only)
 */

require_once __DIR__ . '/../../config/config.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    errorResponse('Method not allowed', 405);
}

// Require admin access
requireAdmin();

// Get JSON input
$input = json_decode(file_get_contents('php://input'), true);

if (!$input) {
    errorResponse('Invalid JSON input');
}

$subject = sanitizeInput($input['subject'] ?? '');
$content = sanitizeInput($input['content'] ?? '');
$campaignId = intval($input['campaign_id'] ?? 0);

// Validate input
if (empty($subject) || empty($content)) {
    errorResponse('Subject and content are required');
}

try {
    $pdo = getDBConnection();
    
    // If campaign ID is provided, use existing campaign
    if ($campaignId > 0) {
        $stmt = $pdo->prepare("
            SELECT id, subject, content, status 
            FROM newsletter_campaigns 
            WHERE id = ? AND created_by = ?
        ");
        $stmt->execute([$campaignId, getCurrentUserId()]);
        $campaign = $stmt->fetch();
        
        if (!$campaign) {
            errorResponse('Campaign not found', 404);
        }
        
        if ($campaign['status'] !== 'draft') {
            errorResponse('Campaign is not in draft status');
        }
        
        $subject = $campaign['subject'];
        $content = $campaign['content'];
    }
    
    // Get active subscribers
    $stmt = $pdo->prepare("
        SELECT email, name 
        FROM newsletter_subscribers 
        WHERE status = 'active'
    ");
    $stmt->execute();
    $subscribers = $stmt->fetchAll();
    
    if (empty($subscribers)) {
        errorResponse('No active subscribers found');
    }
    
    // Create campaign record if not using existing one
    if ($campaignId === 0) {
        $stmt = $pdo->prepare("
            INSERT INTO newsletter_campaigns (subject, content, status, created_by)
            VALUES (?, ?, 'sent', ?)
        ");
        $stmt->execute([$subject, $content, getCurrentUserId()]);
        $campaignId = $pdo->lastInsertId();
    } else {
        // Update campaign status
        $stmt = $pdo->prepare("
            UPDATE newsletter_campaigns 
            SET status = 'sent', sent_at = NOW()
            WHERE id = ?
        ");
        $stmt->execute([$campaignId]);
    }
    
    // Send emails (simplified - in production, use a proper email service)
    $sentCount = 0;
    $failedCount = 0;
    
    foreach ($subscribers as $subscriber) {
        try {
            // Here you would integrate with Mailgun, SendGrid, or other email service
            // For now, we'll just log the attempt
            $emailContent = "
                Subject: {$subject}
                To: {$subscriber['email']}
                Content: {$content}
            ";
            
            error_log("Newsletter email would be sent: " . $emailContent);
            $sentCount++;
            
        } catch (Exception $e) {
            error_log("Failed to send email to {$subscriber['email']}: " . $e->getMessage());
            $failedCount++;
        }
    }
    
    // Log activity
    logActivity(getCurrentUserId(), 'newsletter_send', "Sent newsletter to {$sentCount} subscribers");
    
    $response = [
        'campaign_id' => $campaignId,
        'sent_count' => $sentCount,
        'failed_count' => $failedCount,
        'total_subscribers' => count($subscribers)
    ];
    
    successResponse($response, 'Newsletter sent successfully');
    
} catch (Exception $e) {
    error_log("Send newsletter error: " . $e->getMessage());
    errorResponse('Failed to send newsletter', 500);
}
?> 