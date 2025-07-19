<?php

namespace Database\Seeders;

use App\Models\GameServer;
use Illuminate\Database\Seeder;

class GameServerSeeder extends Seeder
{
    public function run(): void
    {
        $servers = [
            [
                'name' => 'Minecraft Creative',
                'type' => 'minecraft',
                'host' => 'play.salinashelton.com',
                'port' => 25565,
                'status' => 'online',
                'player_count' => 12,
                'max_players' => 50,
                'description' => 'A family-friendly creative Minecraft server',
                'version' => '1.20.1',
                'server_info' => ['gamemode' => 'creative', 'world_type' => 'flat'],
                'is_active' => true,
            ],
            [
                'name' => 'Minecraft Survival',
                'type' => 'minecraft',
                'host' => 'survival.salinashelton.com',
                'port' => 25566,
                'status' => 'online',
                'player_count' => 8,
                'max_players' => 30,
                'description' => 'Survival mode with friendly community',
                'version' => '1.20.1',
                'server_info' => ['gamemode' => 'survival', 'difficulty' => 'normal'],
                'is_active' => true,
            ],
            [
                'name' => 'Roblox Studio',
                'type' => 'roblox',
                'host' => 'roblox.salinashelton.com',
                'port' => 80,
                'status' => 'maintenance',
                'player_count' => 0,
                'max_players' => 100,
                'description' => 'Roblox development and testing server',
                'version' => 'Latest',
                'server_info' => ['mode' => 'development'],
                'is_active' => true,
            ],
        ];

        foreach ($servers as $serverData) {
            GameServer::create($serverData);
        }
    }
} 