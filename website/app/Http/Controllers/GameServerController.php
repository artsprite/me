<?php

namespace App\Http\Controllers;

use App\Models\GameServer;
use Illuminate\Http\Request;

class GameServerController extends Controller
{
    public function index()
    {
        $servers = GameServer::where('is_active', true)->get();
        return view('game-servers.index', compact('servers'));
    }

    public function manage()
    {
        $servers = GameServer::all();
        return view('game-servers.manage', compact('servers'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'host' => 'required|string|max:255',
            'port' => 'required|integer|min:1|max:65535',
            'description' => 'nullable|string',
            'version' => 'nullable|string|max:255',
            'is_active' => 'boolean',
        ]);

        GameServer::create($validated);

        return redirect()->route('admin.game-servers.manage')->with('success', 'Game server added successfully!');
    }

    public function update(Request $request, GameServer $server)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'host' => 'required|string|max:255',
            'port' => 'required|integer|min:1|max:65535',
            'description' => 'nullable|string',
            'version' => 'nullable|string|max:255',
            'is_active' => 'boolean',
        ]);

        $server->update($validated);

        return redirect()->route('admin.game-servers.manage')->with('success', 'Game server updated successfully!');
    }

    public function destroy(GameServer $server)
    {
        $server->delete();

        return redirect()->route('admin.game-servers.manage')->with('success', 'Game server deleted successfully!');
    }

    public function checkStatus(GameServer $server)
    {
        // This would typically ping the server to check its status
        // For now, we'll simulate the check
        $status = $this->pingServer($server->host, $server->port);
        
        $server->update([
            'status' => $status ? 'online' : 'offline',
            'last_check' => now(),
        ]);

        return response()->json([
            'status' => $server->status,
            'last_check' => $server->last_check->format('Y-m-d H:i:s'),
        ]);
    }

    private function pingServer($host, $port)
    {
        // Simple socket connection to check if server is reachable
        $connection = @fsockopen($host, $port, $errno, $errstr, 5);
        
        if (is_resource($connection)) {
            fclose($connection);
            return true;
        }
        
        return false;
    }
} 