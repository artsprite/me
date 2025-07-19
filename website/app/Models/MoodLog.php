<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MoodLog extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'mood',
        'mood_level',
        'notes',
        'activities',
        'triggers',
        'is_private',
    ];

    protected $casts = [
        'activities' => 'array',
        'triggers' => 'array',
        'is_private' => 'boolean',
    ];

    /**
     * Get the user that owns the mood log.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the mood emoji for display.
     */
    public function getMoodEmojiAttribute(): string
    {
        return match($this->mood) {
            'very_happy' => '😄',
            'happy' => '🙂',
            'neutral' => '😐',
            'sad' => '😔',
            'very_sad' => '😢',
            'anxious' => '😰',
            'stressed' => '😤',
            'calm' => '😌',
            'excited' => '🤩',
            'tired' => '😴',
            default => '😐',
        };
    }

    /**
     * Get the mood color for display.
     */
    public function getMoodColorAttribute(): string
    {
        return match($this->mood) {
            'very_happy' => 'text-green-600',
            'happy' => 'text-green-500',
            'neutral' => 'text-gray-500',
            'sad' => 'text-blue-500',
            'very_sad' => 'text-blue-600',
            'anxious' => 'text-yellow-500',
            'stressed' => 'text-orange-500',
            'calm' => 'text-teal-500',
            'excited' => 'text-pink-500',
            'tired' => 'text-purple-500',
            default => 'text-gray-500',
        };
    }
}
