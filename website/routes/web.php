<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Auth\LoginRegister;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TherapyController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\MediaLibraryController;
use App\Http\Controllers\GameServerController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\AiAssistantController;

Route::get('/', function () {
    return view('welcome');
});

// Admin redirect for non-authenticated users
Route::get('/admin', function () {
    if (!auth()->check()) {
        return redirect()->route('login');
    }
    if (!auth()->user()->isAdmin()) {
        return redirect()->route('dashboard')->with('error', 'Access denied. Admin privileges required.');
    }
    return redirect()->route('admin.dashboard');
})->name('admin');

// Custom login route (alternative)
Route::get('/login-custom', function () {
    return view('auth.login-custom');
})->name('login.custom');

// Dashboard route for authenticated users
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    
    // Add a home route that redirects to dashboard
    Route::get('/home', function () {
        return redirect()->route('dashboard');
    })->name('home');
    
    // Profile routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Therapy Sessions
    Route::prefix('therapy')->name('therapy.')->group(function () {
        Route::get('/sessions', [TherapyController::class, 'index'])->name('sessions');
        Route::get('/sessions/create', [TherapyController::class, 'create'])->name('sessions.create');
        Route::post('/sessions', [TherapyController::class, 'store'])->name('sessions.store');
        Route::get('/sessions/{session}', [TherapyController::class, 'show'])->name('sessions.show');
        Route::get('/sessions/{session}/play', [TherapyController::class, 'play'])->name('sessions.play');
    });

    // Bookings
    Route::prefix('bookings')->name('bookings.')->group(function () {
        Route::get('/', [BookingController::class, 'index'])->name('index');
        Route::get('/create', [BookingController::class, 'create'])->name('create');
        Route::post('/', [BookingController::class, 'store'])->name('store');
        Route::get('/{booking}', [BookingController::class, 'show'])->name('show');
        Route::get('/{booking}/edit', [BookingController::class, 'edit'])->name('edit');
        Route::put('/{booking}', [BookingController::class, 'update'])->name('update');
        Route::delete('/{booking}', [BookingController::class, 'destroy'])->name('destroy');
    });

    // Media Library
    Route::prefix('media')->name('media.')->group(function () {
        Route::get('/library', [MediaLibraryController::class, 'index'])->name('library');
        Route::get('/upload', [MediaLibraryController::class, 'create'])->name('upload');
        Route::post('/upload', [MediaLibraryController::class, 'store'])->name('store');
        Route::post('/upload/bulk', [MediaLibraryController::class, 'bulkUpload'])->name('bulk-upload');
        Route::get('/{media}', [MediaLibraryController::class, 'show'])->name('show');
        Route::delete('/{media}', [MediaLibraryController::class, 'destroy'])->name('destroy');
        Route::get('/{media}/download', [MediaLibraryController::class, 'download'])->name('download');
    });

    // AI Assistant
    Route::prefix('ai')->name('ai.')->group(function () {
        Route::get('/assistant', [AiAssistantController::class, 'index'])->name('assistant');
        Route::post('/chat', [AiAssistantController::class, 'chat'])->name('chat');
        Route::post('/upload-document', [AiAssistantController::class, 'uploadDocument'])->name('upload-document');
        Route::get('/documents', [AiAssistantController::class, 'documents'])->name('documents');
    });
});

// Game Server Status (public)
Route::get('/game-servers', [GameServerController::class, 'index'])->name('game-servers');

// Newsletter (public)
Route::post('/newsletter/subscribe', [NewsletterController::class, 'subscribe'])->name('newsletter.subscribe');
Route::get('/newsletter/unsubscribe/{email}', [NewsletterController::class, 'unsubscribe'])->name('newsletter.unsubscribe');

// Admin routes
Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');
    
    // User Management
    Route::get('/users', function () {
        $users = \App\Models\User::paginate(15);
        return view('admin.users.index', compact('users'));
    })->name('users.index');
    
    // Therapy Sessions Management
    Route::get('/therapy-sessions', function () {
        $sessions = \App\Models\TherapySession::with('user')->paginate(15);
        return view('admin.therapy-sessions.index', compact('sessions'));
    })->name('therapy-sessions.index');
    
    // Bookings Management
    Route::get('/bookings', function () {
        $bookings = \App\Models\Booking::with(['user', 'therapist'])->paginate(15);
        return view('admin.bookings.index', compact('bookings'));
    })->name('bookings.index');
    
    // Media Library Management
    Route::get('/media-library', function () {
        $media = \App\Models\MediaLibrary::with('user')->paginate(15);
        return view('admin.media-library.index', compact('media'));
    })->name('media-library.index');
    
    // AI Documents Management
    Route::get('/ai-documents', function () {
        $documents = \App\Models\AiDocument::with('user')->paginate(15);
        return view('admin.ai-documents.index', compact('documents'));
    })->name('ai-documents.index');
    
    Route::get('/newsletters', [NewsletterController::class, 'index'])->name('newsletters.index');
    Route::get('/newsletters/create', [NewsletterController::class, 'create'])->name('newsletters.create');
    Route::post('/newsletters', [NewsletterController::class, 'store'])->name('newsletters.store');
    Route::get('/newsletters/{newsletter}/send', [NewsletterController::class, 'send'])->name('newsletters.send');
    
    Route::get('/game-servers/manage', [GameServerController::class, 'manage'])->name('game-servers.manage');
    Route::post('/game-servers', [GameServerController::class, 'store'])->name('game-servers.store');
    Route::put('/game-servers/{server}', [GameServerController::class, 'update'])->name('game-servers.update');
    Route::delete('/game-servers/{server}', [GameServerController::class, 'destroy'])->name('game-servers.destroy');
});

require __DIR__.'/auth.php';
