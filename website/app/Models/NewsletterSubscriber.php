<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsletterSubscriber extends Model
{
    use HasFactory;

    protected $fillable = [
        'email',
        'first_name',
        'last_name',
        'is_active',
        'subscribed_at',
        'unsubscribed_at',
        'unsubscribe_reason',
        'preferences',
        'ip_address',
        'user_agent',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'subscribed_at' => 'datetime',
        'unsubscribed_at' => 'datetime',
        'preferences' => 'array',
    ];

    /**
     * Get the full name of the subscriber.
     */
    public function getFullNameAttribute(): string
    {
        return trim($this->first_name . ' ' . $this->last_name);
    }

    /**
     * Check if subscriber is active.
     */
    public function getIsActiveAttribute(): bool
    {
        return $this->attributes['is_active'] && !$this->unsubscribed_at;
    }

    /**
     * Scope for active subscribers.
     */
    public function scopeActive($query)
    {
        return $query->where('is_active', true)
                    ->whereNull('unsubscribed_at');
    }

    /**
     * Scope for inactive subscribers.
     */
    public function scopeInactive($query)
    {
        return $query->where(function ($q) {
            $q->where('is_active', false)
              ->orWhereNotNull('unsubscribed_at');
        });
    }
}
