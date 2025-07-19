<?php
/**
 * File Upload API Endpoint
 * Handles media file uploads (images, videos, audio, documents)
 */

require_once __DIR__ . '/../../config/config.php';

// Require authentication
requireAuth();

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    errorResponse('Method not allowed', 405);
}

try {
    $pdo = getDBConnection();
    
    if (!isset($_FILES['files'])) {
        errorResponse('No files uploaded');
    }
    
    $uploadedFiles = [];
    $errors = [];
    
    // Handle multiple files
    $files = $_FILES['files'];
    $fileCount = count($files['name']);
    
    for ($i = 0; $i < $fileCount; $i++) {
        $file = [
            'name' => $files['name'][$i],
            'type' => $files['type'][$i],
            'tmp_name' => $files['tmp_name'][$i],
            'error' => $files['error'][$i],
            'size' => $files['size'][$i]
        ];
        
        // Determine file type and validation
        $fileExtension = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
        $uploadDir = '';
        $allowedTypes = [];
        
        if (in_array($fileExtension, ALLOWED_IMAGE_TYPES)) {
            $uploadDir = UPLOAD_IMAGES;
            $allowedTypes = ALLOWED_IMAGE_TYPES;
            $fileType = 'image';
        } elseif (in_array($fileExtension, ALLOWED_VIDEO_TYPES)) {
            $uploadDir = UPLOAD_VIDEOS;
            $allowedTypes = ALLOWED_VIDEO_TYPES;
            $fileType = 'video';
        } elseif (in_array($fileExtension, ALLOWED_AUDIO_TYPES)) {
            $uploadDir = UPLOAD_AUDIO;
            $allowedTypes = ALLOWED_AUDIO_TYPES;
            $fileType = 'audio';
        } elseif (in_array($fileExtension, ALLOWED_DOCUMENT_TYPES)) {
            $uploadDir = UPLOAD_PDFS;
            $allowedTypes = ALLOWED_DOCUMENT_TYPES;
            $fileType = 'document';
        } else {
            $errors[] = "File type not allowed: {$file['name']}";
            continue;
        }
        
        // Validate file
        $validation = validateFileUpload($file, $allowedTypes);
        if (!$validation['valid']) {
            $errors[] = "{$file['name']}: {$validation['error']}";
            continue;
        }
        
        // Generate unique filename
        $uniqueName = uniqid() . '_' . time() . '.' . $fileExtension;
        $uploadPath = $uploadDir . $uniqueName;
        
        // Move uploaded file
        if (!move_uploaded_file($file['tmp_name'], $uploadPath)) {
            $errors[] = "Failed to move uploaded file: {$file['name']}";
            continue;
        }
        
        // Save file record to database
        $stmt = $pdo->prepare("
            INSERT INTO media_files (user_id, original_name, file_name, file_path, file_type, file_size, mime_type, created_at) 
            VALUES (?, ?, ?, ?, ?, ?, ?, NOW())
        ");
        
        $stmt->execute([
            $_SESSION['user_id'],
            $file['name'],
            $uniqueName,
            $uploadPath,
            $fileType,
            $file['size'],
            $file['type']
        ]);
        
        $fileId = $pdo->lastInsertId();
        
        $uploadedFiles[] = [
            'id' => $fileId,
            'original_name' => $file['name'],
            'file_name' => $uniqueName,
            'file_type' => $fileType,
            'file_size' => $file['size'],
            'url' => '/api/files/' . $fileId,
            'uploaded_at' => date('Y-m-d H:i:s')
        ];
        
        // Log activity
        logActivity($_SESSION['user_id'], 'file_upload', "Uploaded file: {$file['name']}");
    }
    
    $response = [
        'success' => true,
        'uploaded_files' => $uploadedFiles,
        'total_uploaded' => count($uploadedFiles),
        'errors' => $errors
    ];
    
    if (!empty($errors)) {
        $response['message'] = 'Some files failed to upload';
    } else {
        $response['message'] = 'All files uploaded successfully';
    }
    
    jsonResponse($response);
    
} catch (Exception $e) {
    error_log("File upload error: " . $e->getMessage());
    errorResponse('File upload failed', 500);
}
?> 