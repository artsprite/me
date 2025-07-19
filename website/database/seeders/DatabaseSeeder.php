<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;
use App\Models\Therapist;
use App\Models\GameServer;
use App\Models\MediaLibrary;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Create roles
        $adminRole = Role::firstOrCreate(['name' => 'admin']);
        $therapistRole = Role::firstOrCreate(['name' => 'therapist']);
        $userRole = Role::firstOrCreate(['name' => 'user']);

        // Create permissions
        $permissions = [
            'manage_users',
            'manage_therapists',
            'manage_media',
            'manage_bookings',
            'manage_mood_logs',
            'manage_files',
            'manage_game_servers',
            'manage_newsletters',
            'view_admin_panel',
            'upload_files',
            'download_files',
            'create_bookings',
            'view_mood_logs',
        ];

        foreach ($permissions as $permission) {
            Permission::firstOrCreate(['name' => $permission]);
        }

        // Assign permissions to roles
        $adminRole->givePermissionTo(Permission::all());
        
        $therapistRole->givePermissionTo([
            'manage_bookings',
            'manage_mood_logs',
            'upload_files',
            'download_files',
            'view_mood_logs',
        ]);
        
        $userRole->givePermissionTo([
            'upload_files',
            'download_files',
            'create_bookings',
            'view_mood_logs',
        ]);

        // Create admin user
        $admin = User::firstOrCreate(
            ['email' => 'admin@salinashelton.com'],
            [
                'name' => 'Salina Shelton',
                'password' => Hash::make('admin123'),
                'email_verified_at' => now(),
            ]
        );
        $admin->assignRole('admin');

        // Create therapist user
        $therapist = User::firstOrCreate(
            ['email' => 'sarah@salinashelton.com'],
            [
                'name' => 'Dr. Sarah Johnson',
                'password' => Hash::make('therapist123'),
                'email_verified_at' => now(),
            ]
        );
        $therapist->assignRole('therapist');

        // Create therapist profile
        Therapist::firstOrCreate(
            ['user_id' => $therapist->id],
            [
                'license_number' => 'AT12345',
                'specialization' => 'Art Therapy, Trauma Recovery',
                'bio' => 'Licensed art therapist with 10+ years of experience in trauma recovery and mindfulness practices.',
                'is_available' => true,
            ]
        );

        // Create sample user
        $user = User::firstOrCreate(
            ['email' => 'john@example.com'],
            [
                'name' => 'John Doe',
                'password' => Hash::make('user123'),
                'email_verified_at' => now(),
            ]
        );
        $user->assignRole('user');

        // Create sample game servers
        GameServer::firstOrCreate(
            ['name' => 'Creative Minecraft'],
            [
                'game_type' => 'minecraft',
                'server_address' => 'creative.salinashelton.com',
                'port' => 25565,
                'status' => 'online',
                'current_players' => 12,
                'max_players' => 50,
                'description' => 'A peaceful Minecraft server focused on creative building and art therapy',
                'server_type' => 'creative',
                'is_active' => true,
            ]
        );

        GameServer::firstOrCreate(
            ['name' => 'Wellness Roblox'],
            [
                'game_type' => 'roblox',
                'server_address' => 'wellness.salinashelton.com',
                'port' => 25566,
                'status' => 'online',
                'current_players' => 8,
                'max_players' => 30,
                'description' => 'A Roblox server with therapeutic games and relaxation activities',
                'server_type' => 'wellness',
                'is_active' => true,
            ]
        );

        // Create sample media library items
        MediaLibrary::firstOrCreate(
            ['title' => 'Guided Meditation: Morning Calm'],
            [
                'description' => 'A 10-minute guided meditation to start your day with peace and clarity',
                'type' => 'audio',
                'file_path' => 'media/meditation-morning-calm.mp3',
                'file_name' => 'meditation-morning-calm.mp3',
                'file_size' => '1024000',
                'mime_type' => 'audio/mpeg',
                'duration' => '600', // 10 minutes in seconds
                'is_public' => true,
                'is_featured' => true,
                'uploaded_by' => $therapist->id,
            ]
        );

        MediaLibrary::firstOrCreate(
            ['title' => 'Art Therapy Session: Color Your Emotions'],
            [
                'description' => 'A guided art therapy session to help you express and process your emotions through color',
                'type' => 'video',
                'file_path' => 'media/art-therapy-colors.mp4',
                'file_name' => 'art-therapy-colors.mp4',
                'file_size' => '51200000', // 50MB
                'mime_type' => 'video/mp4',
                'duration' => '1800', // 30 minutes
                'is_public' => true,
                'is_featured' => true,
                'uploaded_by' => $therapist->id,
            ]
        );

        MediaLibrary::firstOrCreate(
            ['title' => 'Breathing Exercise: 4-7-8 Technique'],
            [
                'description' => 'Learn the 4-7-8 breathing technique for stress relief and better sleep',
                'type' => 'audio',
                'file_path' => 'media/breathing-478.mp3',
                'file_name' => 'breathing-478.mp3',
                'file_size' => '2048000',
                'mime_type' => 'audio/mpeg',
                'duration' => '300', // 5 minutes
                'is_public' => true,
                'is_featured' => false,
                'uploaded_by' => $therapist->id,
            ]
        );
    }
}
