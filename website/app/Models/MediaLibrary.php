<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Tags\HasTags;

class MediaLibrary extends Model
{
    use HasFactory, HasTags;

    protected $table = 'media_library';

    protected $fillable = [
        'title',
        'description',
        'type',
        'file_path',
        'file_name',
        'file_size',
        'mime_type',
        'duration',
        'metadata',
        'is_public',
        'is_featured',
        'download_count',
        'view_count',
        'uploaded_by',
    ];

    protected $casts = [
        'metadata' => 'array',
        'is_public' => 'boolean',
        'is_featured' => 'boolean',
    ];

    /**
     * Get the user who uploaded this media.
     */
    public function uploadedBy()
    {
        return $this->belongsTo(User::class, 'uploaded_by');
    }

    /**
     * Get the file URL.
     */
    public function getFileUrlAttribute(): string
    {
        return asset('storage/' . $this->file_path);
    }

    /**
     * Get the file size in human readable format.
     */
    public function getFileSizeHumanAttribute(): string
    {
        if (!$this->file_size) {
            return 'Unknown';
        }

        $bytes = $this->file_size;
        $units = ['B', 'KB', 'MB', 'GB', 'TB'];

        for ($i = 0; $bytes > 1024 && $i < count($units) - 1; $i++) {
            $bytes /= 1024;
        }

        return round($bytes, 2) . ' ' . $units[$i];
    }

    /**
     * Get the duration in human readable format.
     */
    public function getDurationHumanAttribute(): string
    {
        if (!$this->duration) {
            return 'Unknown';
        }

        $seconds = (int) $this->duration;
        $hours = floor($seconds / 3600);
        $minutes = floor(($seconds % 3600) / 60);
        $secs = $seconds % 60;

        if ($hours > 0) {
            return sprintf('%02d:%02d:%02d', $hours, $minutes, $secs);
        }

        return sprintf('%02d:%02d', $minutes, $secs);
    }

    /**
     * Scope for public media.
     */
    public function scopePublic($query)
    {
        return $query->where('is_public', true);
    }

    /**
     * Scope for featured media.
     */
    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true);
    }

    /**
     * Scope for specific type.
     */
    public function scopeOfType($query, $type)
    {
        return $query->where('type', $type);
    }
}
