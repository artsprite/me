<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Livewire\HomePage;
use App\Livewire\MoodTracker;
use App\Livewire\MediaPlayer;
use App\Livewire\BookingCalendar;
use App\Livewire\FileManager;
use App\Livewire\GameServerStatus;
use App\Livewire\NewsletterSignup;
use App\Livewire\ContactForm;

// Public routes
Route::get('/', HomePage::class)->name('home');
Route::get('/mood-tracker', MoodTracker::class)->name('mood-tracker');
Route::get('/media-player', MediaPlayer::class)->name('media-player');
Route::get('/booking', BookingCalendar::class)->name('booking');
Route::get('/files', FileManager::class)->name('files');
Route::get('/game-servers', GameServerStatus::class)->name('game-servers');
Route::get('/contact', ContactForm::class)->name('contact');

// Newsletter signup (public)
Route::post('/newsletter-signup', [NewsletterSignup::class, 'signup'])->name('newsletter.signup');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Admin routes (protected by admin middleware)
Route::middleware(['auth', 'role:admin'])->prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return redirect('/admin');
    })->name('admin.dashboard');
});

// Therapist routes (protected by therapist middleware)
Route::middleware(['auth', 'role:therapist'])->prefix('therapist')->group(function () {
    Route::get('/dashboard', function () {
        return view('therapist.dashboard');
    })->name('therapist.dashboard');
    
    Route::get('/clients', function () {
        return view('therapist.clients');
    })->name('therapist.clients');
    
    Route::get('/bookings', function () {
        return view('therapist.bookings');
    })->name('therapist.bookings');
});

// User routes (protected by auth middleware)
Route::middleware('auth')->prefix('user')->group(function () {
    Route::get('/mood-log', function () {
        return view('user.mood-log');
    })->name('user.mood-log');
    
    Route::get('/bookings', function () {
        return view('user.bookings');
    })->name('user.bookings');
    
    Route::get('/files', function () {
        return view('user.files');
    })->name('user.files');
});

// File download routes
Route::get('/download/media/{id}', function ($id) {
    $media = \App\Models\MediaLibrary::findOrFail($id);
    
    if (!$media->is_public && !auth()->check()) {
        abort(403);
    }
    
    $path = storage_path('app/public/' . $media->file_path);
    
    if (!file_exists($path)) {
        abort(404);
    }
    
    // Increment download count
    $media->increment('download_count');
    
    return response()->download($path, $media->file_name);
})->name('media.download');

Route::get('/download/file/{id}', function ($id) {
    $file = \App\Models\UserFile::findOrFail($id);
    
    if (!$file->is_public && (!auth()->check() || auth()->id() !== $file->user_id)) {
        abort(403);
    }
    
    $path = storage_path('app/public/' . $file->file_path);
    
    if (!file_exists($path)) {
        abort(404);
    }
    
    // Increment download count
    $file->increment('download_count');
    
    return response()->download($path, $file->file_name);
})->name('file.download');

require __DIR__.'/auth.php';
