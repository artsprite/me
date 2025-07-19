<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Therapist;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create roles
        $adminRole = Role::create(['name' => 'admin']);
        $therapistRole = Role::create(['name' => 'therapist']);
        $userRole = Role::create(['name' => 'user']);

        // Create permissions
        $permissions = [
            'view_users',
            'edit_users',
            'delete_users',
            'assign_therapists',
            'view_mood_logs',
            'edit_mood_logs',
            'delete_mood_logs',
            'view_bookings',
            'create_bookings',
            'edit_bookings',
            'delete_bookings',
            'view_media_library',
            'upload_media',
            'edit_media',
            'delete_media',
            'view_newsletters',
            'create_newsletters',
            'send_newsletters',
            'view_user_files',
            'upload_files',
            'edit_files',
            'delete_files',
            'view_game_servers',
            'edit_game_servers',
            'view_therapist_dashboard',
            'view_admin_dashboard',
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }

        // Assign permissions to roles
        $adminRole->givePermissionTo(Permission::all());
        $therapistRole->givePermissionTo([
            'view_users',
            'view_mood_logs',
            'edit_mood_logs',
            'view_bookings',
            'create_bookings',
            'edit_bookings',
            'view_media_library',
            'upload_media',
            'view_user_files',
            'view_therapist_dashboard',
        ]);
        $userRole->givePermissionTo([
            'view_mood_logs',
            'edit_mood_logs',
            'view_bookings',
            'create_bookings',
            'view_media_library',
            'upload_files',
            'edit_files',
            'view_game_servers',
        ]);

        // Create Admin User
        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@salinashelton.com',
            'password' => Hash::make('admin123'),
            'role' => 'admin',
            'phone' => '+1234567890',
            'bio' => 'System Administrator',
            'is_therapist' => false,
            'preferences' => [
                'theme' => 'light',
                'notifications' => true,
            ],
        ]);
        $admin->assignRole('admin');

        // Create Therapist User
        $therapist = User::create([
            'name' => 'Sarah Johnson',
            'email' => 'sarah@salinashelton.com',
            'password' => Hash::make('password'),
            'role' => 'therapist',
            'phone' => '+1234567891',
            'bio' => 'Licensed Art Therapist with 10+ years of experience helping clients through creative expression.',
            'is_therapist' => true,
            'preferences' => [
                'theme' => 'light',
                'notifications' => true,
                'session_reminders' => true,
            ],
        ]);
        $therapist->assignRole('therapist');

        // Create Therapist Profile
        Therapist::create([
            'user_id' => $therapist->id,
            'specialization' => 'Art Therapy',
            'bio' => 'Sarah specializes in using art therapy techniques to help clients process emotions, reduce stress, and improve mental well-being. She has worked with clients of all ages dealing with anxiety, depression, trauma, and life transitions.',
            'license_number' => 'AT-12345',
            'certifications' => [
                'Licensed Art Therapist',
                'Certified Trauma Specialist',
                'Mindfulness-Based Art Therapy',
            ],
            'specialties' => [
                'Anxiety and Depression',
                'Trauma Processing',
                'Stress Management',
                'Life Transitions',
                'Creative Expression',
            ],
            'hourly_rate' => 120.00,
            'availability' => [
                'monday' => ['09:00-17:00'],
                'tuesday' => ['09:00-17:00'],
                'wednesday' => ['09:00-17:00'],
                'thursday' => ['09:00-17:00'],
                'friday' => ['09:00-17:00'],
                'saturday' => ['10:00-14:00'],
                'sunday' => [],
            ],
            'is_available' => true,
            'max_clients' => 20,
            'current_clients' => 0,
            'rating' => 4.8,
            'total_sessions' => 0,
        ]);

        // Create Regular User
        $user = User::create([
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'password' => Hash::make('password'),
            'role' => 'user',
            'phone' => '+1234567892',
            'bio' => 'Looking to improve my mental wellness through art therapy.',
            'assigned_therapist_id' => $therapist->id,
            'is_therapist' => false,
            'preferences' => [
                'theme' => 'light',
                'notifications' => true,
                'mood_reminders' => true,
            ],
        ]);
        $user->assignRole('user');

        // Create additional sample users
        $sampleUsers = [
            [
                'name' => 'Emma Wilson',
                'email' => 'emma@example.com',
                'bio' => 'Interested in mindfulness and creative expression.',
                'assigned_therapist_id' => $therapist->id,
            ],
            [
                'name' => 'Michael Brown',
                'email' => 'michael@example.com',
                'bio' => 'Seeking stress relief through art therapy.',
                'assigned_therapist_id' => $therapist->id,
            ],
            [
                'name' => 'Lisa Davis',
                'email' => 'lisa@example.com',
                'bio' => 'Exploring art therapy for personal growth.',
                'assigned_therapist_id' => $therapist->id,
            ],
        ];

        foreach ($sampleUsers as $sampleUser) {
            $newUser = User::create([
                'name' => $sampleUser['name'],
                'email' => $sampleUser['email'],
                'password' => Hash::make('password'),
                'role' => 'user',
                'bio' => $sampleUser['bio'],
                'assigned_therapist_id' => $sampleUser['assigned_therapist_id'],
                'is_therapist' => false,
                'preferences' => [
                    'theme' => 'light',
                    'notifications' => true,
                    'mood_reminders' => true,
                ],
            ]);
            $newUser->assignRole('user');
        }

        // Update therapist's current clients count
        $therapistProfile = Therapist::where('user_id', $therapist->id)->first();
        $therapistProfile->update([
            'current_clients' => User::where('assigned_therapist_id', $therapist->id)->count()
        ]);
    }
}
