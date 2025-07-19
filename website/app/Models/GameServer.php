<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GameServer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'game_type',
        'server_address',
        'port',
        'status',
        'current_players',
        'max_players',
        'version',
        'description',
        'server_type',
        'is_featured',
        'is_active',
        'last_check',
        'server_info',
    ];

    protected $casts = [
        'is_featured' => 'boolean',
        'is_active' => 'boolean',
        'last_check' => 'datetime',
        'server_info' => 'array',
    ];

    /**
     * Get the server status emoji.
     */
    public function getStatusEmojiAttribute(): string
    {
        return match($this->status) {
            'online' => '🟢',
            'offline' => '🔴',
            'maintenance' => '🟡',
            default => '⚪',
        };
    }

    /**
     * Get the server status color.
     */
    public function getStatusColorAttribute(): string
    {
        return match($this->status) {
            'online' => 'text-green-600',
            'offline' => 'text-red-600',
            'maintenance' => 'text-yellow-600',
            default => 'text-gray-600',
        };
    }

    /**
     * Get the player count percentage.
     */
    public function getPlayerPercentageAttribute(): float
    {
        if ($this->max_players === 0) {
            return 0;
        }
        
        return round(($this->current_players / $this->max_players) * 100, 2);
    }

    /**
     * Get the full server address with port.
     */
    public function getFullAddressAttribute(): string
    {
        if ($this->port) {
            return $this->server_address . ':' . $this->port;
        }
        
        return $this->server_address;
    }

    /**
     * Check if server is online.
     */
    public function getIsOnlineAttribute(): bool
    {
        return $this->status === 'online';
    }

    /**
     * Check if server is offline.
     */
    public function getIsOfflineAttribute(): bool
    {
        return $this->status === 'offline';
    }

    /**
     * Check if server is in maintenance.
     */
    public function getIsMaintenanceAttribute(): bool
    {
        return $this->status === 'maintenance';
    }

    /**
     * Scope for online servers.
     */
    public function scopeOnline($query)
    {
        return $query->where('status', 'online');
    }

    /**
     * Scope for active servers.
     */
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    /**
     * Scope for featured servers.
     */
    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true);
    }

    /**
     * Scope for specific game type.
     */
    public function scopeGameType($query, $gameType)
    {
        return $query->where('game_type', $gameType);
    }
}
