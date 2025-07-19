<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class User extends Authenticatable implements HasMedia
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable, HasRoles, InteractsWithMedia;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'phone',
        'bio',
        'avatar',
        'assigned_therapist_id',
        'is_therapist',
        'preferences',
        'last_login_at',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
            'preferences' => 'array',
            'last_login_at' => 'datetime',
        ];
    }

    /**
     * Get the assigned therapist for this user.
     */
    public function assignedTherapist()
    {
        return $this->belongsTo(User::class, 'assigned_therapist_id');
    }

    /**
     * Get the clients assigned to this therapist.
     */
    public function clients()
    {
        return $this->hasMany(User::class, 'assigned_therapist_id');
    }

    /**
     * Get the mood logs for this user.
     */
    public function moodLogs()
    {
        return $this->hasMany(MoodLog::class);
    }

    /**
     * Get the bookings for this user.
     */
    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }

    /**
     * Get the bookings where this user is the therapist.
     */
    public function therapistBookings()
    {
        return $this->hasMany(Booking::class, 'therapist_id');
    }

    /**
     * Get the user files for this user.
     */
    public function userFiles()
    {
        return $this->hasMany(UserFile::class);
    }

    /**
     * Get the media library items uploaded by this user.
     */
    public function mediaLibraryItems()
    {
        return $this->hasMany(MediaLibrary::class, 'uploaded_by');
    }

    /**
     * Get the newsletters created by this user.
     */
    public function newsletters()
    {
        return $this->hasMany(Newsletter::class, 'created_by');
    }

    /**
     * Check if user is admin.
     */
    public function isAdmin(): bool
    {
        return $this->hasRole('admin');
    }

    /**
     * Check if user is therapist.
     */
    public function isTherapist(): bool
    {
        return $this->hasRole('therapist') || $this->is_therapist;
    }

    /**
     * Check if user is regular user.
     */
    public function isRegularUser(): bool
    {
        return $this->hasRole('user');
    }

    /**
     * Get the therapist profile for this user.
     */
    public function therapistProfile()
    {
        return $this->hasOne(Therapist::class);
    }
}
