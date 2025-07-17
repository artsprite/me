<?php
/**
 * Create Booking API Endpoint
 * Creates a new therapy session booking
 */

require_once __DIR__ . '/../../config/config.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    errorResponse('Method not allowed', 405);
}

// Require authentication
requireAuth();

// Get JSON input
$input = json_decode(file_get_contents('php://input'), true);

if (!$input) {
    errorResponse('Invalid JSON input');
}

$title = sanitizeInput($input['title'] ?? '');
$description = sanitizeInput($input['description'] ?? '');
$startTime = sanitizeInput($input['start_time'] ?? '');
$endTime = sanitizeInput($input['end_time'] ?? '');
$sessionType = sanitizeInput($input['session_type'] ?? 'individual');
$location = sanitizeInput($input['location'] ?? '');
$notes = sanitizeInput($input['notes'] ?? '');
$therapistId = intval($input['therapist_id'] ?? 0);

// Validate input
if (empty($title) || empty($startTime) || empty($endTime)) {
    errorResponse('Title, start time, and end time are required');
}

// Validate session type
$validSessionTypes = ['individual', 'group', 'workshop'];
if (!in_array($sessionType, $validSessionTypes)) {
    errorResponse('Invalid session type');
}

// Validate dates
$startDateTime = DateTime::createFromFormat('Y-m-d H:i:s', $startTime);
$endDateTime = DateTime::createFromFormat('Y-m-d H:i:s', $endTime);

if (!$startDateTime || !$endDateTime) {
    errorResponse('Invalid date format. Use YYYY-MM-DD HH:MM:SS');
}

if ($startDateTime >= $endDateTime) {
    errorResponse('End time must be after start time');
}

if ($startDateTime < new DateTime()) {
    errorResponse('Start time cannot be in the past');
}

try {
    $pdo = getDBConnection();
    
    // Check for booking conflicts
    $stmt = $pdo->prepare("
        SELECT id FROM bookings 
        WHERE user_id = ? 
        AND status IN ('pending', 'confirmed')
        AND (
            (start_time <= ? AND end_time > ?) OR
            (start_time < ? AND end_time >= ?) OR
            (start_time >= ? AND end_time <= ?)
        )
    ");
    $stmt->execute([
        getCurrentUserId(),
        $startTime,
        $startTime,
        $endTime,
        $endTime,
        $startTime,
        $endTime
    ]);
    
    if ($stmt->fetch()) {
        errorResponse('Booking conflicts with existing session');
    }
    
    // If therapist is specified, verify they exist and are available
    if ($therapistId > 0) {
        $stmt = $pdo->prepare("
            SELECT id, name FROM users 
            WHERE id = ? AND role = 'admin' AND status = 'active'
        ");
        $stmt->execute([$therapistId]);
        $therapist = $stmt->fetch();
        
        if (!$therapist) {
            errorResponse('Invalid therapist selected');
        }
        
        // Check therapist availability
        $stmt = $pdo->prepare("
            SELECT id FROM bookings 
            WHERE therapist_id = ? 
            AND status IN ('pending', 'confirmed')
            AND (
                (start_time <= ? AND end_time > ?) OR
                (start_time < ? AND end_time >= ?) OR
                (start_time >= ? AND end_time <= ?)
            )
        ");
        $stmt->execute([
            $therapistId,
            $startTime,
            $startTime,
            $endTime,
            $endTime,
            $startTime,
            $endTime
        ]);
        
        if ($stmt->fetch()) {
            errorResponse('Therapist is not available at this time');
        }
    }
    
    // Create booking
    $stmt = $pdo->prepare("
        INSERT INTO bookings (user_id, therapist_id, title, description, start_time, end_time, 
                             session_type, location, notes, status)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, 'pending')
    ");
    
    $stmt->execute([
        getCurrentUserId(),
        $therapistId > 0 ? $therapistId : null,
        $title,
        $description,
        $startTime,
        $endTime,
        $sessionType,
        $location,
        $notes
    ]);
    
    $bookingId = $pdo->lastInsertId();
    
    // Get created booking
    $stmt = $pdo->prepare("
        SELECT b.*, u.name as therapist_name
        FROM bookings b
        LEFT JOIN users u ON b.therapist_id = u.id
        WHERE b.id = ?
    ");
    $stmt->execute([$bookingId]);
    $booking = $stmt->fetch();
    
    // Log activity
    logActivity(getCurrentUserId(), 'booking_create', "Created booking: {$title}");
    
    successResponse($booking, 'Booking created successfully');
    
} catch (Exception $e) {
    error_log("Create booking error: " . $e->getMessage());
    errorResponse('Failed to create booking', 500);
}
?> 