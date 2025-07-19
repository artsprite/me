<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // Create admin user
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@salinashelton.com',
            'password' => Hash::make('admin123'),
            'role' => 'admin',
            'status' => 'active',
        ]);

        // Create therapist user
        User::create([
            'name' => 'Dr. Sarah Johnson',
            'email' => 'sarah@salinashelton.com',
            'password' => Hash::make('therapist123'),
            'role' => 'therapist',
            'status' => 'active',
        ]);

        // Create regular user
        User::create([
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'password' => Hash::make('user123'),
            'role' => 'user',
            'status' => 'active',
        ]);
    }
} 