<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\GameServer;

class GameServerStatus extends Component
{
    public $servers = [];
    public $filter = 'all';
    public $search = '';

    public function mount()
    {
        $this->loadServers();
    }

    public function loadServers()
    {
        $query = GameServer::active();
        
        if ($this->filter === 'online') {
            $query->online();
        } elseif ($this->filter === 'offline') {
            $query->where('status', 'offline');
        } elseif ($this->filter === 'maintenance') {
            $query->where('status', 'maintenance');
        }
        
        if ($this->search) {
            $query->where(function($q) {
                $q->where('name', 'like', '%' . $this->search . '%')
                  ->orWhere('description', 'like', '%' . $this->search . '%')
                  ->orWhere('game_type', 'like', '%' . $this->search . '%');
            });
        }
        
        $this->servers = $query->orderBy('is_featured', 'desc')
                              ->orderBy('current_players', 'desc')
                              ->get();
    }

    public function updatedSearch()
    {
        $this->loadServers();
    }

    public function updatedFilter()
    {
        $this->loadServers();
    }

    public function refreshServers()
    {
        // In a real application, this would ping the servers to get current status
        $this->loadServers();
        session()->flash('message', 'Server status refreshed!');
    }

    public function render()
    {
        $stats = [
            'total' => GameServer::active()->count(),
            'online' => GameServer::active()->online()->count(),
            'offline' => GameServer::active()->where('status', 'offline')->count(),
            'maintenance' => GameServer::active()->where('status', 'maintenance')->count(),
            'total_players' => GameServer::active()->sum('current_players'),
        ];

        return view('livewire.game-server-status', [
            'stats' => $stats,
        ])->layout('layouts.app');
    }
}
