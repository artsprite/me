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
        'user_id',
        'title',
        'description',
        'file_path',
        'file_name',
        'file_type',
        'mime_type',
        'file_size',
        'folder',
        'tags',
        'is_public',
        'download_count',
    ];

    protected $casts = [
        'tags' => 'array',
        'is_public' => 'boolean',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getFileUrlAttribute()
    {
        return asset('storage/' . $this->file_path);
    }

    public function getFileSizeFormattedAttribute()
    {
        $bytes = $this->file_size;
        $units = ['B', 'KB', 'MB', 'GB'];
        
        for ($i = 0; $bytes > 1024 && $i < count($units) - 1; $i++) {
            $bytes /= 1024;
        }
        
        return round($bytes, 2) . ' ' . $units[$i];
    }

    public function isPlayable()
    {
        return in_array($this->file_type, ['video', 'audio']);
    }
} 