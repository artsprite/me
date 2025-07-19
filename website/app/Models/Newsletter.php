<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Newsletter extends Model
{
    use HasFactory;

    protected $fillable = [
        'subject',
        'content',
        'status',
        'scheduled_at',
        'sent_at',
        'sent_count',
        'opened_count',
        'clicked_count',
        'recipients',
        'created_by',
    ];

    protected $casts = [
        'scheduled_at' => 'datetime',
        'sent_at' => 'datetime',
        'recipients' => 'array',
    ];

    /**
     * Get the user who created this newsletter.
     */
    public function createdBy()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    /**
     * Check if newsletter is draft.
     */
    public function getIsDraftAttribute(): bool
    {
        return $this->status === 'draft';
    }

    /**
     * Check if newsletter is scheduled.
     */
    public function getIsScheduledAttribute(): bool
    {
        return $this->status === 'scheduled';
    }

    /**
     * Check if newsletter is sent.
     */
    public function getIsSentAttribute(): bool
    {
        return $this->status === 'sent';
    }

    /**
     * Get the open rate percentage.
     */
    public function getOpenRateAttribute(): float
    {
        if ($this->sent_count === 0) {
            return 0;
        }
        
        return round(($this->opened_count / $this->sent_count) * 100, 2);
    }

    /**
     * Get the click rate percentage.
     */
    public function getClickRateAttribute(): float
    {
        if ($this->sent_count === 0) {
            return 0;
        }
        
        return round(($this->clicked_count / $this->sent_count) * 100, 2);
    }

    /**
     * Scope for draft newsletters.
     */
    public function scopeDraft($query)
    {
        return $query->where('status', 'draft');
    }

    /**
     * Scope for scheduled newsletters.
     */
    public function scopeScheduled($query)
    {
        return $query->where('status', 'scheduled');
    }

    /**
     * Scope for sent newsletters.
     */
    public function scopeSent($query)
    {
        return $query->where('status', 'sent');
    }
}
