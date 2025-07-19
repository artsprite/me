<?php
/**
 * Cancel Booking API Endpoint
 * Cancels a booking if it's still pending or confirmed
 */

require_once __DIR__ . '/../../config/config.php';

if ($_SERVER['REQUEST_METHOD'] !== 'PUT') {
    errorResponse('Method not allowed', 405);
}

// Require authentication
requireAuth();

$bookingId = intval($_GET['id'] ?? 0);

if ($bookingId <= 0) {
    errorResponse('Invalid booking ID');
}

try {
    $pdo = getDBConnection();
    
    // Get booking information
    $stmt = $pdo->prepare("
        SELECT id, title, start_time, status
        FROM bookings 
        WHERE id = ? AND user_id = ?
    ");
    $stmt->execute([$bookingId, getCurrentUserId()]);
    $booking = $stmt->fetch();
    
    if (!$booking) {
        errorResponse('Booking not found', 404);
    }
    
    // Check if booking can be cancelled
    if ($booking['status'] !== 'pending' && $booking['status'] !== 'confirmed') {
        errorResponse('Booking cannot be cancelled');
    }
    
    // Check if booking is in the past
    $startTime = new DateTime($booking['start_time']);
    if ($startTime < new DateTime()) {
        errorResponse('Cannot cancel past bookings');
    }
    
    // Update booking status
    $stmt = $pdo->prepare("
        UPDATE bookings 
        SET status = 'cancelled', updated_at = NOW()
        WHERE id = ? AND user_id = ?
    ");
    $stmt->execute([$bookingId, getCurrentUserId()]);
    
    if ($stmt->rowCount() === 0) {
        errorResponse('Failed to cancel booking', 500);
    }
    
    // Log activity
    logActivity(getCurrentUserId(), 'booking_cancel', "Cancelled booking: {$booking['title']}");
    
    successResponse(null, 'Booking cancelled successfully');
    
} catch (Exception $e) {
    error_log("Cancel booking error: " . $e->getMessage());
    errorResponse('Failed to cancel booking', 500);
}
?> 