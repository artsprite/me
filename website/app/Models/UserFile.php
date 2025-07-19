<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Tags\HasTags;

class UserFile extends Model
{
    use HasFactory, HasTags;

    protected $fillable = [
        'user_id',
        'title',
        'description',
        'file_path',
        'file_name',
        'file_size',
        'mime_type',
        'type',
        'is_public',
        'is_featured',
        'download_count',
        'view_count',
        'tags',
        'metadata',
    ];

    protected $casts = [
        'tags' => 'array',
        'metadata' => 'array',
        'is_public' => 'boolean',
        'is_featured' => 'boolean',
    ];

    /**
     * Get the user who owns this file.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
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
     * Check if file is an image.
     */
    public function getIsImageAttribute(): bool
    {
        return $this->type === 'image' || str_starts_with($this->mime_type, 'image/');
    }

    /**
     * Check if file is a video.
     */
    public function getIsVideoAttribute(): bool
    {
        return $this->type === 'video' || str_starts_with($this->mime_type, 'video/');
    }

    /**
     * Check if file is an audio file.
     */
    public function getIsAudioAttribute(): bool
    {
        return $this->type === 'audio' || str_starts_with($this->mime_type, 'audio/');
    }

    /**
     * Check if file is a document.
     */
    public function getIsDocumentAttribute(): bool
    {
        return $this->type === 'document' || str_starts_with($this->mime_type, 'application/');
    }

    /**
     * Scope for public files.
     */
    public function scopePublic($query)
    {
        return $query->where('is_public', true);
    }

    /**
     * Scope for private files.
     */
    public function scopePrivate($query)
    {
        return $query->where('is_public', false);
    }

    /**
     * Scope for featured files.
     */
    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true);
    }

    /**
     * Scope for specific file type.
     */
    public function scopeOfType($query, $type)
    {
        return $query->where('type', $type);
    }
}
