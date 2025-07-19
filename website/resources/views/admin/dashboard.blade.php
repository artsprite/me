<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Welcome Banner with User Avatar -->
        <div class="card-pastel p-8 mb-8">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <img src="{{ asset('images/user-avatar.svg') }}" alt="User Avatar" class="w-20 h-20 rounded-full shadow-lg">
                </div>
                <div class="ml-6">
                    <h1 class="text-3xl font-bold text-gray-900">Welcome back, {{ auth()->user()->name }}!</h1>
                    <p class="text-lg text-gray-600 mt-2">Take a moment to breathe and center yourself.</p>
                </div>
            </div>
        </div>

        <!-- Main Feature Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
            <div class="card-pastel p-6 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                <div class="flex flex-col items-center text-center">
                    <img src="{{ asset('images/therapy-sessions.svg') }}" alt="Therapy Sessions" class="w-16 h-16 mb-4">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">Therapy Sessions</h3>
                    <p class="text-sm text-gray-600 mb-4">Access your audio therapy and meditation sessions</p>
                    <a href="{{ route('therapy.sessions.index') }}" class="bg-gradient-to-r from-pastel-purple to-pastel-pink text-white px-6 py-2 rounded-lg hover:shadow-lg transition-all duration-300">
                        Start Session
                    </a>
                </div>
            </div>

            <div class="card-pastel p-6 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                <div class="flex flex-col items-center text-center">
                    <img src="{{ asset('images/bookings.svg') }}" alt="Bookings" class="w-16 h-16 mb-4">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">Bookings</h3>
                    <p class="text-sm text-gray-600 mb-4">Schedule your therapy appointments</p>
                    <a href="{{ route('bookings.index') }}" class="bg-gradient-to-r from-pastel-green to-pastel-mint text-white px-6 py-2 rounded-lg hover:shadow-lg transition-all duration-300">
                        View Bookings
                    </a>
                </div>
            </div>

            <div class="card-pastel p-6 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                <div class="flex flex-col items-center text-center">
                    <img src="{{ asset('images/media-library.svg') }}" alt="Media Library" class="w-16 h-16 mb-4">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">Media Library</h3>
                    <p class="text-sm text-gray-600 mb-4">Access your therapy resources and materials</p>
                    <a href="{{ route('media.index') }}" class="bg-gradient-to-r from-pastel-yellow to-pastel-orange text-white px-6 py-2 rounded-lg hover:shadow-lg transition-all duration-300">
                        Browse Library
                    </a>
                </div>
            </div>

            <div class="card-pastel p-6 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                <div class="flex flex-col items-center text-center">
                    <img src="{{ asset('images/ai-assistant.svg') }}" alt="AI Assistant" class="w-16 h-16 mb-4">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">AI Assistant</h3>
                    <p class="text-sm text-gray-600 mb-4">Get personalized therapy insights</p>
                    <a href="{{ route('ai.chat') }}" class="bg-gradient-to-r from-pastel-blue to-pastel-purple text-white px-6 py-2 rounded-lg hover:shadow-lg transition-all duration-300">
                        Chat with AI
                    </a>
                </div>
            </div>
        </div>

        <!-- Stats Overview -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
            <div class="card-pastel p-6 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                <div class="flex items-center">
                    <div class="w-12 h-12 bg-gradient-to-br from-pastel-blue to-pastel-purple rounded-full flex items-center justify-center shadow-lg">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"></path>
                        </svg>
                    </div>
                    <div class="ml-4">
                        <p class="text-sm font-medium text-gray-600">Total Users</p>
                        <p class="text-2xl font-semibold text-gray-900">{{ \App\Models\User::count() }}</p>
                    </div>
                </div>
            </div>

            <div class="card-pastel p-6 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                <div class="flex items-center">
                    <div class="w-12 h-12 bg-gradient-to-br from-pastel-purple to-pastel-pink rounded-full flex items-center justify-center shadow-lg">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3"></path>
                        </svg>
                    </div>
                    <div class="ml-4">
                        <p class="text-sm font-medium text-gray-600">Therapy Sessions</p>
                        <p class="text-2xl font-semibold text-gray-900">{{ \App\Models\TherapySession::count() }}</p>
                    </div>
                </div>
            </div>

            <div class="card-pastel p-6 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                <div class="flex items-center">
                    <div class="w-12 h-12 bg-gradient-to-br from-pastel-green to-pastel-mint rounded-full flex items-center justify-center shadow-lg">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <div class="ml-4">
                        <p class="text-sm font-medium text-gray-600">Active Bookings</p>
                        <p class="text-2xl font-semibold text-gray-900">{{ \App\Models\Booking::where('status', 'confirmed')->count() }}</p>
                    </div>
                </div>
            </div>

            <div class="card-pastel p-6 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                <div class="flex items-center">
                    <div class="w-12 h-12 bg-gradient-to-br from-pastel-yellow to-pastel-orange rounded-full flex items-center justify-center shadow-lg">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <div class="ml-4">
                        <p class="text-sm font-medium text-gray-600">Newsletter Subscribers</p>
                        <p class="text-2xl font-semibold text-gray-900">{{ \App\Models\NewsletterSubscriber::count() }}</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Quick Actions -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-8">
            <div class="card-pastel p-6">
                <h3 class="text-lg font-semibold text-gray-900 mb-4">Quick Actions</h3>
                <div class="space-y-3">
                    <a href="{{ route('therapy.sessions.create') }}" class="flex items-center p-4 bg-gradient-to-r from-pastel-purple to-pastel-pink rounded-lg hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1">
                        <div class="w-10 h-10 bg-white/20 rounded-full flex items-center justify-center mr-3">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                            </svg>
                        </div>
                        <span class="text-sm font-medium text-white">Create Therapy Session</span>
                    </a>
                    
                    <a href="{{ route('admin.newsletters.create') }}" class="flex items-center p-4 bg-gradient-to-r from-pastel-yellow to-pastel-orange rounded-lg hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1">
                        <div class="w-10 h-10 bg-white/20 rounded-full flex items-center justify-center mr-3">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <span class="text-sm font-medium text-white">Send Newsletter</span>
                    </a>
                    
                    <a href="{{ route('admin.game-servers.manage') }}" class="flex items-center p-4 bg-gradient-to-r from-pastel-blue to-pastel-purple rounded-lg hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1">
                        <img src="{{ asset('images/game-server.svg') }}" alt="Game Server" class="w-10 h-10 mr-3">
                        <span class="text-sm font-medium text-white">Manage Game Servers</span>
                    </a>
                    
                    <a href="{{ route('media.upload') }}" class="flex items-center p-4 bg-gradient-to-r from-pastel-green to-pastel-mint rounded-lg hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1">
                        <div class="w-10 h-10 bg-white/20 rounded-full flex items-center justify-center mr-3">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path>
                            </svg>
                        </div>
                        <span class="text-sm font-medium text-white">Upload Media Files</span>
                    </a>
                </div>
            </div>

            <div class="card-pastel p-6">
                <h3 class="text-lg font-semibold text-gray-900 mb-4">Recent Activity</h3>
                <div class="space-y-4">
                    @php
                        $recentUsers = \App\Models\User::latest()->take(5)->get();
                        $recentSessions = \App\Models\TherapySession::latest()->take(5)->get();
                    @endphp
                    
                    <div>
                        <h4 class="text-sm font-medium text-gray-700 mb-2">Recent Users</h4>
                        <div class="space-y-2">
                            @foreach($recentUsers as $user)
                                <div class="flex items-center justify-between p-3 bg-gradient-to-r from-pastel-blue/30 to-pastel-purple/30 rounded-lg border border-pastel-lavender">
                                    <div class="flex items-center">
                                        <div class="w-8 h-8 bg-gradient-to-br from-pastel-pink to-pastel-orange rounded-full flex items-center justify-center mr-3">
                                            <span class="text-xs text-white font-medium">{{ strtoupper(substr($user->name, 0, 1)) }}</span>
                                        </div>
                                        <span class="text-sm text-gray-900">{{ $user->name }}</span>
                                    </div>
                                    <span class="text-xs text-gray-500">{{ $user->created_at->diffForHumans() }}</span>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    
                    <div>
                        <h4 class="text-sm font-medium text-gray-700 mb-2">Recent Sessions</h4>
                        <div class="space-y-2">
                            @if($recentSessions->count() > 0)
                                @foreach($recentSessions as $session)
                                    <div class="flex items-center justify-between p-3 bg-gradient-to-r from-pastel-purple/30 to-pastel-pink/30 rounded-lg border border-pastel-lavender">
                                        <div class="flex items-center">
                                            <img src="{{ asset('images/music-note.svg') }}" alt="Music Note" class="w-8 h-8 mr-3">
                                            <span class="text-sm text-gray-900">{{ $session->title }}</span>
                                        </div>
                                        <span class="text-xs text-gray-500">{{ $session->created_at->diffForHumans() }}</span>
                                    </div>
                                @endforeach
                            @else
                                <div class="flex flex-col items-center justify-center p-6 bg-gradient-to-r from-pastel-purple/30 to-pastel-pink/30 rounded-lg border border-pastel-lavender">
                                    <img src="{{ asset('images/music-note.svg') }}" alt="Music Note" class="w-12 h-12 mb-3 opacity-50">
                                    <p class="text-sm text-gray-600 mb-3">No therapy sessions yet</p>
                                    <a href="{{ route('therapy.sessions.create') }}" class="bg-gradient-to-r from-pastel-green to-pastel-mint text-white px-4 py-2 rounded-lg hover:shadow-lg transition-all duration-300 text-sm">
                                        Start Your First Session
                                    </a>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- System Status and Game Servers -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <!-- System Status -->
            <div class="card-pastel p-6">
                <h3 class="text-lg font-semibold text-gray-900 mb-4">System Status</h3>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="text-center p-4 bg-gradient-to-br from-pastel-green/20 to-pastel-mint/20 rounded-xl border border-pastel-green/30">
                        <div class="w-16 h-16 bg-gradient-to-br from-pastel-green to-pastel-mint rounded-full flex items-center justify-center mx-auto mb-3 shadow-lg">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <h4 class="text-sm font-medium text-gray-900">Database</h4>
                        <p class="text-xs text-green-600 font-medium">Online</p>
                    </div>
                    
                    <div class="text-center p-4 bg-gradient-to-br from-pastel-blue/20 to-pastel-purple/20 rounded-xl border border-pastel-blue/30">
                        <div class="w-16 h-16 bg-gradient-to-br from-pastel-blue to-pastel-purple rounded-full flex items-center justify-center mx-auto mb-3 shadow-lg">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <h4 class="text-sm font-medium text-gray-900">File Storage</h4>
                        <p class="text-xs text-green-600 font-medium">Online</p>
                    </div>
                    
                    <div class="text-center p-4 bg-gradient-to-br from-pastel-purple/20 to-pastel-pink/20 rounded-xl border border-pastel-purple/30">
                        <div class="w-16 h-16 bg-gradient-to-br from-pastel-purple to-pastel-pink rounded-full flex items-center justify-center mx-auto mb-3 shadow-lg">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <h4 class="text-sm font-medium text-gray-900">AI Assistant</h4>
                        <p class="text-xs text-green-600 font-medium">Online</p>
                    </div>
                </div>
            </div>

            <!-- Game Server Status -->
            <div class="card-pastel p-6">
                <h3 class="text-lg font-semibold text-gray-900 mb-4">Game Server Status</h3>
                <div class="space-y-4">
                    <div class="flex items-center justify-between p-4 bg-gradient-to-r from-pastel-green/30 to-pastel-mint/30 rounded-lg border border-pastel-green/30">
                        <div class="flex items-center">
                            <img src="{{ asset('images/minecraft.svg') }}" alt="Minecraft Creative" class="w-10 h-10 mr-3">
                            <div>
                                <h4 class="text-sm font-medium text-gray-900">Minecraft Creative</h4>
                                <p class="text-xs text-gray-600">12/50 players</p>
                            </div>
                        </div>
                        <span class="px-3 py-1 bg-green-100 text-green-800 text-xs font-medium rounded-full">Online</span>
                    </div>
                    
                    <div class="flex items-center justify-between p-4 bg-gradient-to-r from-pastel-green/30 to-pastel-mint/30 rounded-lg border border-pastel-green/30">
                        <div class="flex items-center">
                            <img src="{{ asset('images/minecraft.svg') }}" alt="Minecraft Survival" class="w-10 h-10 mr-3">
                            <div>
                                <h4 class="text-sm font-medium text-gray-900">Minecraft Survival</h4>
                                <p class="text-xs text-gray-600">8/30 players</p>
                            </div>
                        </div>
                        <span class="px-3 py-1 bg-green-100 text-green-800 text-xs font-medium rounded-full">Online</span>
                    </div>
                    
                    <div class="flex items-center justify-between p-4 bg-gradient-to-r from-pastel-yellow/30 to-pastel-orange/30 rounded-lg border border-pastel-yellow/30">
                        <div class="flex items-center">
                            <img src="{{ asset('images/roblox.svg') }}" alt="Roblox Studio" class="w-10 h-10 mr-3">
                            <div>
                                <h4 class="text-sm font-medium text-gray-900">Roblox Studio</h4>
                                <p class="text-xs text-gray-600">0/100 players</p>
                            </div>
                        </div>
                        <span class="px-3 py-1 bg-yellow-100 text-yellow-800 text-xs font-medium rounded-full">Maintenance</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout> 