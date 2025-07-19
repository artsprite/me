<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Tags\HasTags;

class User extends Authenticatable
{
    use HasFactory, Notifiable, HasTags;

    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'status',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    // Relationships
    public function therapySessions()
    {
        return $this->hasMany(TherapySession::class);
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }

    public function therapistBookings()
    {
        return $this->hasMany(Booking::class, 'therapist_id');
    }

    public function mediaLibrary()
    {
        return $this->hasMany(MediaLibrary::class);
    }

    public function aiDocuments()
    {
        return $this->hasMany(AiDocument::class);
    }

    // Helper methods
    public function isAdmin()
    {
        return $this->role === 'admin';
    }

    public function isTherapist()
    {
        return $this->role === 'therapist';
    }

    public function isActive()
    {
        return $this->status === 'active';
    }
}
