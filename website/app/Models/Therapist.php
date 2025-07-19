<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Therapist extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'specialization',
        'bio',
        'license_number',
        'certifications',
        'specialties',
        'hourly_rate',
        'availability',
        'is_available',
        'max_clients',
        'current_clients',
        'rating',
        'total_sessions',
    ];

    protected $casts = [
        'certifications' => 'array',
        'specialties' => 'array',
        'availability' => 'array',
        'is_available' => 'boolean',
        'rating' => 'decimal:2',
    ];

    /**
     * Get the user associated with this therapist profile.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the bookings for this therapist.
     */
    public function bookings()
    {
        return $this->hasMany(Booking::class, 'therapist_id');
    }

    /**
     * Get the clients assigned to this therapist.
     */
    public function clients()
    {
        return $this->hasMany(User::class, 'assigned_therapist_id');
    }

    /**
     * Get the upcoming bookings for this therapist.
     */
    public function upcomingBookings()
    {
        return $this->bookings()->upcoming();
    }

    /**
     * Get the today's bookings for this therapist.
     */
    public function todayBookings()
    {
        return $this->bookings()->today();
    }

    /**
     * Check if therapist has availability.
     */
    public function getHasAvailabilityAttribute(): bool
    {
        return $this->current_clients < $this->max_clients && $this->is_available;
    }

    /**
     * Get the availability percentage.
     */
    public function getAvailabilityPercentageAttribute(): float
    {
        if ($this->max_clients === 0) {
            return 0;
        }
        
        return round((($this->max_clients - $this->current_clients) / $this->max_clients) * 100, 2);
    }

    /**
     * Scope for available therapists.
     */
    public function scopeAvailable($query)
    {
        return $query->where('is_available', true)
                    ->whereRaw('current_clients < max_clients');
    }

    /**
     * Scope for therapists with specific specialization.
     */
    public function scopeSpecialization($query, $specialization)
    {
        return $query->where('specialization', $specialization);
    }
}
