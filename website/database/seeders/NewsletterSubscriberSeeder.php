<?php

namespace Database\Seeders;

use App\Models\NewsletterSubscriber;
use Illuminate\Database\Seeder;

class NewsletterSubscriberSeeder extends Seeder
{
    public function run(): void
    {
        $subscribers = [
            [
                'email' => 'john@example.com',
                'name' => 'John Doe',
                'is_active' => true,
                'subscribed_at' => now(),
            ],
            [
                'email' => 'jane@example.com',
                'name' => 'Jane Smith',
                'is_active' => true,
                'subscribed_at' => now(),
            ],
            [
                'email' => 'mike@example.com',
                'name' => 'Mike Johnson',
                'is_active' => true,
                'subscribed_at' => now(),
            ],
        ];

        foreach ($subscribers as $subscriberData) {
            NewsletterSubscriber::create($subscriberData);
        }
    }
} 