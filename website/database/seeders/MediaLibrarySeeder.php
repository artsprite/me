<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MediaLibrary;
use App\Models\User;

class MediaLibrarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::where('email', 'admin@salinashelton.com')->first();

        $mediaItems = [
            [
                'title' => 'Guided Meditation: Morning Calm',
                'description' => 'Start your day with this gentle 10-minute guided meditation designed to bring peace and clarity to your morning routine.',
                'type' => 'audio',
                'file_path' => 'media/audio/morning-meditation.mp3',
                'file_name' => 'morning-meditation.mp3',
                'file_size' => '5242880', // 5MB
                'mime_type' => 'audio/mpeg',
                'duration' => '600', // 10 minutes
                'metadata' => [
                    'artist' => 'Salina Shelton',
                    'category' => 'meditation',
                    'difficulty' => 'beginner',
                    'tags' => ['morning', 'calm', 'beginner', 'meditation'],
                ],
                'is_public' => true,
                'is_featured' => true,
                'uploaded_by' => $admin->id,
            ],
            [
                'title' => 'Art Therapy Session: Mandala Drawing',
                'description' => 'Learn the therapeutic benefits of mandala drawing with step-by-step instructions and guided prompts.',
                'type' => 'video',
                'file_path' => 'media/videos/mandala-drawing.mp4',
                'file_name' => 'mandala-drawing.mp4',
                'file_size' => '52428800', // 50MB
                'mime_type' => 'video/mp4',
                'duration' => '1800', // 30 minutes
                'metadata' => [
                    'instructor' => 'Sarah Johnson',
                    'category' => 'art-therapy',
                    'difficulty' => 'intermediate',
                    'materials' => ['paper', 'pencils', 'colored pencils', 'compass'],
                    'tags' => ['mandala', 'drawing', 'art-therapy', 'meditation'],
                ],
                'is_public' => true,
                'is_featured' => true,
                'uploaded_by' => $admin->id,
            ],
            [
                'title' => 'Stress Relief Breathing Exercise',
                'description' => 'A simple but effective breathing technique to help reduce stress and anxiety in just 5 minutes.',
                'type' => 'audio',
                'file_path' => 'media/audio/breathing-exercise.mp3',
                'file_name' => 'breathing-exercise.mp3',
                'file_size' => '2621440', // 2.5MB
                'mime_type' => 'audio/mpeg',
                'duration' => '300', // 5 minutes
                'metadata' => [
                    'artist' => 'Salina Shelton',
                    'category' => 'breathing',
                    'difficulty' => 'beginner',
                    'tags' => ['breathing', 'stress-relief', 'anxiety', 'quick'],
                ],
                'is_public' => true,
                'is_featured' => false,
                'uploaded_by' => $admin->id,
            ],
            [
                'title' => 'Mindfulness Coloring Guide',
                'description' => 'A comprehensive guide to mindfulness coloring with printable templates and therapeutic benefits.',
                'type' => 'document',
                'file_path' => 'media/documents/mindfulness-coloring-guide.pdf',
                'file_name' => 'mindfulness-coloring-guide.pdf',
                'file_size' => '2097152', // 2MB
                'mime_type' => 'application/pdf',
                'duration' => null,
                'metadata' => [
                    'author' => 'Sarah Johnson',
                    'category' => 'coloring',
                    'pages' => 15,
                    'includes_templates' => true,
                    'tags' => ['coloring', 'mindfulness', 'printable', 'templates'],
                ],
                'is_public' => true,
                'is_featured' => true,
                'uploaded_by' => $admin->id,
            ],
            [
                'title' => 'Evening Relaxation Music',
                'description' => 'Soothing instrumental music perfect for evening relaxation and preparing for restful sleep.',
                'type' => 'audio',
                'file_path' => 'media/audio/evening-relaxation.mp3',
                'file_name' => 'evening-relaxation.mp3',
                'file_size' => '15728640', // 15MB
                'mime_type' => 'audio/mpeg',
                'duration' => '1800', // 30 minutes
                'metadata' => [
                    'artist' => 'Salina Shelton',
                    'category' => 'relaxation',
                    'difficulty' => 'beginner',
                    'tags' => ['evening', 'relaxation', 'sleep', 'instrumental'],
                ],
                'is_public' => true,
                'is_featured' => false,
                'uploaded_by' => $admin->id,
            ],
            [
                'title' => 'Art Therapy Workshop: Emotion Expression',
                'description' => 'A comprehensive workshop teaching how to express emotions through various art mediums.',
                'type' => 'video',
                'file_path' => 'media/videos/emotion-expression-workshop.mp4',
                'file_name' => 'emotion-expression-workshop.mp4',
                'file_size' => '104857600', // 100MB
                'mime_type' => 'video/mp4',
                'duration' => '3600', // 60 minutes
                'metadata' => [
                    'instructor' => 'Sarah Johnson',
                    'category' => 'art-therapy',
                    'difficulty' => 'advanced',
                    'materials' => ['canvas', 'acrylic paints', 'brushes', 'palette'],
                    'tags' => ['emotions', 'expression', 'art-therapy', 'workshop'],
                ],
                'is_public' => true,
                'is_featured' => true,
                'uploaded_by' => $admin->id,
            ],
            [
                'title' => 'Wellness Journal Template',
                'description' => 'Printable wellness journal template with prompts for daily reflection and mood tracking.',
                'type' => 'document',
                'file_path' => 'media/documents/wellness-journal-template.pdf',
                'file_name' => 'wellness-journal-template.pdf',
                'file_size' => '1048576', // 1MB
                'mime_type' => 'application/pdf',
                'duration' => null,
                'metadata' => [
                    'author' => 'Salina Shelton',
                    'category' => 'journaling',
                    'pages' => 8,
                    'includes_prompts' => true,
                    'tags' => ['journaling', 'wellness', 'template', 'reflection'],
                ],
                'is_public' => true,
                'is_featured' => false,
                'uploaded_by' => $admin->id,
            ],
            [
                'title' => 'Nature Sounds: Forest Ambience',
                'description' => 'Immerse yourself in the calming sounds of a forest with birds, rustling leaves, and gentle streams.',
                'type' => 'audio',
                'file_path' => 'media/audio/forest-ambience.mp3',
                'file_name' => 'forest-ambience.mp3',
                'file_size' => '20971520', // 20MB
                'mime_type' => 'audio/mpeg',
                'duration' => '2700', // 45 minutes
                'metadata' => [
                    'artist' => 'Nature Sounds',
                    'category' => 'nature',
                    'difficulty' => 'beginner',
                    'tags' => ['nature', 'forest', 'ambience', 'relaxation'],
                ],
                'is_public' => true,
                'is_featured' => false,
                'uploaded_by' => $admin->id,
            ],
        ];

        foreach ($mediaItems as $item) {
            MediaLibrary::create($item);
        }
    }
}
