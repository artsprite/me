<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'therapist_id',
        'title',
        'description',
        'start_time',
        'end_time',
        'status',
        'session_type',
        'notes',
        'therapist_notes',
        'meeting_link',
        'location',
        'price',
        'is_paid',
    ];

    protected $casts = [
        'start_time' => 'datetime',
        'end_time' => 'datetime',
        'is_paid' => 'boolean',
    ];

    /**
     * Get the user who made the booking.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the therapist for this booking.
     */
    public function therapist()
    {
        return $this->belongsTo(User::class, 'therapist_id');
    }

    /**
     * Get the session duration in minutes.
     */
    public function getDurationAttribute(): int
    {
        return $this->start_time->diffInMinutes($this->end_time);
    }

    /**
     * Get the session duration in human readable format.
     */
    public function getDurationHumanAttribute(): string
    {
        $minutes = $this->duration;
        
        if ($minutes < 60) {
            return $minutes . ' minutes';
        }
        
        $hours = floor($minutes / 60);
        $remainingMinutes = $minutes % 60;
        
        if ($remainingMinutes === 0) {
            return $hours . ' hour' . ($hours > 1 ? 's' : '');
        }
        
        return $hours . ' hour' . ($hours > 1 ? 's' : '') . ' ' . $remainingMinutes . ' minutes';
    }

    /**
     * Check if booking is upcoming.
     */
    public function getIsUpcomingAttribute(): bool
    {
        return $this->start_time->isFuture() && $this->status === 'confirmed';
    }

    /**
     * Check if booking is past.
     */
    public function getIsPastAttribute(): bool
    {
        return $this->end_time->isPast();
    }

    /**
     * Check if booking is today.
     */
    public function getIsTodayAttribute(): bool
    {
        return $this->start_time->isToday();
    }

    /**
     * Scope for upcoming bookings.
     */
    public function scopeUpcoming($query)
    {
        return $query->where('start_time', '>', now())->where('status', 'confirmed');
    }

    /**
     * Scope for past bookings.
     */
    public function scopePast($query)
    {
        return $query->where('end_time', '<', now());
    }

    /**
     * Scope for today's bookings.
     */
    public function scopeToday($query)
    {
        return $query->whereDate('start_time', today());
    }
}
