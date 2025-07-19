<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GameServer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'type',
        'host',
        'port',
        'status',
        'player_count',
        'max_players',
        'description',
        'version',
        'server_info',
        'last_check',
        'is_active',
    ];

    protected $casts = [
        'server_info' => 'array',
        'last_check' => 'datetime',
        'is_active' => 'boolean',
    ];

    public function getStatusColorAttribute()
    {
        return match($this->status) {
            'online' => 'green',
            'offline' => 'red',
            'maintenance' => 'yellow',
            default => 'gray',
        };
    }

    public function getPlayerPercentageAttribute()
    {
        if ($this->max_players === 0) return 0;
        return round(($this->player_count / $this->max_players) * 100);
    }
} 