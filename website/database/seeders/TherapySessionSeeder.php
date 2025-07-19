<?php

namespace Database\Seeders;

use App\Models\TherapySession;
use App\Models\User;
use Illuminate\Database\Seeder;

class TherapySessionSeeder extends Seeder
{
    public function run(): void
    {
        $user = User::where('email', 'john@example.com')->first();

        if ($user) {
            $sessions = [
                [
                    'title' => 'Morning Meditation',
                    'description' => 'A gentle 10-minute meditation to start your day with peace and clarity.',
                    'type' => 'meditation',
                    'duration' => 10,
                    'metadata' => ['category' => 'morning', 'difficulty' => 'beginner'],
                ],
                [
                    'title' => 'Stress Relief Breathing',
                    'description' => 'Deep breathing exercises to help you relax and reduce stress.',
                    'type' => 'audio',
                    'duration' => 15,
                    'metadata' => ['category' => 'stress-relief', 'difficulty' => 'beginner'],
                ],
                [
                    'title' => 'Gratitude Journaling',
                    'description' => 'A guided journaling session to cultivate gratitude and positive thinking.',
                    'type' => 'journaling',
                    'duration' => 20,
                    'metadata' => ['category' => 'gratitude', 'difficulty' => 'beginner'],
                ],
                [
                    'title' => 'Sleep Meditation',
                    'description' => 'A calming meditation to help you fall asleep naturally.',
                    'type' => 'meditation',
                    'duration' => 30,
                    'metadata' => ['category' => 'sleep', 'difficulty' => 'beginner'],
                ],
                [
                    'title' => 'Anxiety Relief Session',
                    'description' => 'Techniques to manage anxiety and find inner calm.',
                    'type' => 'audio',
                    'duration' => 25,
                    'metadata' => ['category' => 'anxiety', 'difficulty' => 'intermediate'],
                ],
            ];

            foreach ($sessions as $sessionData) {
                TherapySession::create(array_merge($sessionData, [
                    'user_id' => $user->id,
                    'is_active' => true,
                ]));
            }
        }
    }
} 