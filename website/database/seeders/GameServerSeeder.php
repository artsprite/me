<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\GameServer;

class GameServerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $servers = [
            [
                'name' => 'Minecraft Survival World',
                'game_type' => 'minecraft',
                'server_address' => 'play.salinashelton.com',
                'port' => 25565,
                'status' => 'online',
                'current_players' => 12,
                'max_players' => 50,
                'version' => '1.20.1',
                'description' => 'A peaceful survival world where players can build, explore, and create together in a safe environment.',
                'server_type' => 'survival',
                'is_featured' => true,
                'is_active' => true,
                'last_check' => now(),
                'server_info' => [
                    'gamemode' => 'survival',
                    'difficulty' => 'peaceful',
                    'pvp' => false,
                    'world_type' => 'default',
                    'plugins' => ['Essentials', 'WorldEdit', 'CoreProtect'],
                ],
            ],
            [
                'name' => 'Minecraft Creative Studio',
                'game_type' => 'minecraft',
                'server_address' => 'creative.salinashelton.com',
                'port' => 25566,
                'status' => 'online',
                'current_players' => 8,
                'max_players' => 30,
                'version' => '1.20.1',
                'description' => 'Unlimited creative building space with all blocks and tools available for artistic expression.',
                'server_type' => 'creative',
                'is_featured' => true,
                'is_active' => true,
                'last_check' => now(),
                'server_info' => [
                    'gamemode' => 'creative',
                    'difficulty' => 'peaceful',
                    'pvp' => false,
                    'world_type' => 'flat',
                    'plugins' => ['Essentials', 'WorldEdit', 'VoxelSniper'],
                ],
            ],
            [
                'name' => 'Roblox Art Studio',
                'game_type' => 'roblox',
                'server_address' => 'www.roblox.com',
                'port' => null,
                'status' => 'online',
                'current_players' => 25,
                'max_players' => 100,
                'version' => 'Latest',
                'description' => 'A creative Roblox experience focused on art, building, and collaborative projects.',
                'server_type' => 'creative',
                'is_featured' => true,
                'is_active' => true,
                'last_check' => now(),
                'server_info' => [
                    'experience_id' => '123456789',
                    'genre' => 'Building',
                    'max_players' => 100,
                    'rating' => 4.8,
                ],
            ],
            [
                'name' => 'Minecraft Adventure Map',
                'game_type' => 'minecraft',
                'server_address' => 'adventure.salinashelton.com',
                'port' => 25567,
                'status' => 'maintenance',
                'current_players' => 0,
                'max_players' => 20,
                'version' => '1.20.1',
                'description' => 'Custom adventure maps with puzzles, stories, and challenges designed for therapeutic play.',
                'server_type' => 'adventure',
                'is_featured' => false,
                'is_active' => true,
                'last_check' => now(),
                'server_info' => [
                    'gamemode' => 'adventure',
                    'difficulty' => 'normal',
                    'pvp' => false,
                    'world_type' => 'custom',
                    'plugins' => ['Essentials', 'WorldGuard', 'CustomMaps'],
                ],
            ],
            [
                'name' => 'Roblox Mindfulness Garden',
                'game_type' => 'roblox',
                'server_address' => 'www.roblox.com',
                'port' => null,
                'status' => 'online',
                'current_players' => 15,
                'max_players' => 50,
                'version' => 'Latest',
                'description' => 'A peaceful garden environment for relaxation, meditation, and mindfulness activities.',
                'server_type' => 'relaxation',
                'is_featured' => false,
                'is_active' => true,
                'last_check' => now(),
                'server_info' => [
                    'experience_id' => '987654321',
                    'genre' => 'Simulation',
                    'max_players' => 50,
                    'rating' => 4.9,
                ],
            ],
        ];

        foreach ($servers as $server) {
            GameServer::create($server);
        }
    }
}
