<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Mindfulness Therapy Platform') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-gradient-pastel min-h-screen">
    <div class="min-h-screen">
        <!-- Navigation -->
        <nav class="bg-white shadow-sm border-b border-gray-100">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-16">
                    <div class="flex items-center">
                        <div class="flex items-center space-x-2">
                            <div class="w-8 h-8 bg-gradient-to-br from-purple-400 to-pink-400 rounded-full flex items-center justify-center">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                </svg>
                            </div>
                            <span class="text-xl font-bold text-gray-900">Mindfulness Therapy</span>
                        </div>
                    </div>
                    <div class="flex items-center space-x-4">
                        @auth
                            <a href="{{ route('dashboard') }}" class="btn-pastel-primary">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="btn-pastel-primary">Login</a>
                            <a href="{{ route('register') }}" class="btn-pastel-secondary">Register</a>
                        @endauth
                    </div>
                </div>
            </div>
        </nav>

        <!-- Hero Section -->
        <div class="relative overflow-hidden">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24">
                <div class="text-center">
                    <h1 class="text-4xl md:text-6xl font-bold text-gray-900 mb-6">
                        Your Journey to
                        <span class="bg-gradient-to-r from-purple-400 to-pink-400 bg-clip-text text-transparent">
                            Mental Wellness
                        </span>
                    </h1>
                    <p class="text-xl text-gray-600 mb-8 max-w-3xl mx-auto">
                        A comprehensive mindfulness therapy platform designed to support your mental health journey with personalized sessions, AI assistance, and a supportive community.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        @auth
                            <a href="{{ route('dashboard') }}" class="btn-pastel-primary text-lg px-8 py-4">
                                Go to Dashboard
                            </a>
                        @else
                            <a href="{{ route('register') }}" class="btn-pastel-primary text-lg px-8 py-4">
                                Start Your Journey
                            </a>
                            <a href="{{ route('login') }}" class="btn-pastel-secondary text-lg px-8 py-4">
                                Sign In
                            </a>
                        @endauth
                    </div>
                </div>
            </div>
        </div>

        <!-- Features Section -->
        <div class="py-24 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <h2 class="text-3xl font-bold text-gray-900 mb-4">Comprehensive Wellness Features</h2>
                    <p class="text-xl text-gray-600">Everything you need for your mental health journey in one place</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Therapy Sessions -->
                    <div class="card-pastel p-8 text-center">
                        <div class="w-16 h-16 bg-gradient-to-br from-purple-400 to-pink-400 rounded-full flex items-center justify-center mx-auto mb-6">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-4">Therapy Sessions</h3>
                        <p class="text-gray-600 mb-6">Access guided meditation, audio therapy, and journaling sessions tailored to your needs.</p>
                        <ul class="text-sm text-gray-600 space-y-2">
                            <li>• Guided meditation sessions</li>
                            <li>• Audio therapy programs</li>
                            <li>• Journaling exercises</li>
                            <li>• Progress tracking</li>
                        </ul>
                    </div>

                    <!-- AI Assistant -->
                    <div class="card-pastel p-8 text-center">
                        <div class="w-16 h-16 bg-gradient-to-br from-yellow-400 to-orange-400 rounded-full flex items-center justify-center mx-auto mb-6">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-4">AI Assistant</h3>
                        <p class="text-gray-600 mb-6">Get personalized mental health support and insights from our AI-powered assistant.</p>
                        <ul class="text-sm text-gray-600 space-y-2">
                            <li>• 24/7 mental health support</li>
                            <li>• Document analysis</li>
                            <li>• Personalized recommendations</li>
                            <li>• Stress and anxiety guidance</li>
                        </ul>
                    </div>

                    <!-- Media Library -->
                    <div class="card-pastel p-8 text-center">
                        <div class="w-16 h-16 bg-gradient-to-br from-green-400 to-emerald-400 rounded-full flex items-center justify-center mx-auto mb-6">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-4">Media Library</h3>
                        <p class="text-gray-600 mb-6">Organize and access your therapy resources, videos, and educational materials.</p>
                        <ul class="text-sm text-gray-600 space-y-2">
                            <li>• Bulk file uploads</li>
                            <li>• Organized folders</li>
                            <li>• Searchable content</li>
                            <li>• Playable media</li>
                        </ul>
                    </div>

                    <!-- Bookings -->
                    <div class="card-pastel p-8 text-center">
                        <div class="w-16 h-16 bg-gradient-to-br from-blue-400 to-cyan-400 rounded-full flex items-center justify-center mx-auto mb-6">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-4">Appointment Booking</h3>
                        <p class="text-gray-600 mb-6">Schedule therapy sessions and consultations with qualified professionals.</p>
                        <ul class="text-sm text-gray-600 space-y-2">
                            <li>• Easy scheduling</li>
                            <li>• Therapist profiles</li>
                            <li>• Session reminders</li>
                            <li>• Video consultations</li>
                        </ul>
                    </div>

                    <!-- Game Servers -->
                    <div class="card-pastel p-8 text-center">
                        <div class="w-16 h-16 bg-gradient-to-br from-indigo-400 to-purple-400 rounded-full flex items-center justify-center mx-auto mb-6">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-4">Game Server Status</h3>
                        <p class="text-gray-600 mb-6">Monitor child-friendly game servers and ensure safe gaming environments.</p>
                        <ul class="text-sm text-gray-600 space-y-2">
                            <li>• Real-time status</li>
                            <li>• Player counts</li>
                            <li>• Server health</li>
                            <li>• Family-friendly games</li>
                        </ul>
                    </div>

                    <!-- Newsletter -->
                    <div class="card-pastel p-8 text-center">
                        <div class="w-16 h-16 bg-gradient-to-br from-pink-400 to-red-400 rounded-full flex items-center justify-center mx-auto mb-6">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-4">Newsletter System</h3>
                        <p class="text-gray-600 mb-6">Stay connected with mindfulness tips and mental health updates.</p>
                        <ul class="text-sm text-gray-600 space-y-2">
                            <li>• Weekly wellness tips</li>
                            <li>• Expert insights</li>
                            <li>• Community updates</li>
                            <li>• Personalized content</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- CTA Section -->
        <div class="bg-gradient-mindfulness py-24">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Ready to Start Your Wellness Journey?</h2>
                <p class="text-xl text-gray-600 mb-8">Join thousands of users who have transformed their mental health with our platform.</p>
                @auth
                    <a href="{{ route('dashboard') }}" class="btn-pastel-primary text-lg px-8 py-4">
                        Access Your Dashboard
                    </a>
                @else
                    <a href="{{ route('register') }}" class="btn-pastel-primary text-lg px-8 py-4">
                        Get Started Today
                    </a>
                @endauth
            </div>
        </div>

        <!-- Footer -->
        <footer class="bg-white border-t border-gray-100">
            <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
                <div class="text-center">
                    <div class="flex items-center justify-center space-x-2 mb-4">
                        <div class="w-8 h-8 bg-gradient-to-br from-purple-400 to-pink-400 rounded-full flex items-center justify-center">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>
                        </div>
                        <span class="text-xl font-bold text-gray-900">Mindfulness Therapy Platform</span>
                    </div>
                    <p class="text-gray-600 mb-4">Supporting your mental wellness journey with compassion and technology.</p>
                    <p class="text-sm text-gray-500">&copy; {{ date('Y') }} Mindfulness Therapy Platform. All rights reserved.</p>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>
