<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Mindfulness Dashboard') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Welcome Section -->
        <div class="card-pastel mb-8 p-6">
            <div class="flex items-center space-x-4">
                <div class="flex-shrink-0">
                    <div class="w-16 h-16 bg-gradient-to-br from-pastel-green to-pastel-mint rounded-full flex items-center justify-center shadow-lg">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                        </svg>
                    </div>
                </div>
                <div>
                    <h1 class="text-2xl font-bold text-gray-900">Welcome back, {{ Auth::user()->name }}!</h1>
                    <p class="text-gray-600">Take a moment to breathe and center yourself.</p>
                </div>
            </div>
        </div>

        <!-- Quick Actions Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
            <!-- Therapy Sessions -->
            <div class="card-pastel p-6 text-center hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                <div class="w-12 h-12 bg-gradient-to-br from-pastel-purple to-pastel-pink rounded-full flex items-center justify-center mx-auto mb-4 shadow-lg">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Therapy Sessions</h3>
                <p class="text-gray-600 mb-4">Access your audio therapy and meditation sessions</p>
                <a href="{{ route('therapy.sessions') }}" class="btn-pastel-primary inline-block">Start Session</a>
            </div>

            <!-- Bookings -->
            <div class="card-pastel p-6 text-center hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                <div class="w-12 h-12 bg-gradient-to-br from-pastel-blue to-pastel-purple rounded-full flex items-center justify-center mx-auto mb-4 shadow-lg">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Bookings</h3>
                <p class="text-gray-600 mb-4">Schedule your therapy appointments</p>
                <a href="{{ route('bookings.index') }}" class="btn-pastel-primary inline-block">View Bookings</a>
            </div>

            <!-- Media Library -->
            <div class="card-pastel p-6 text-center hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                <div class="w-12 h-12 bg-gradient-to-br from-pastel-green to-pastel-mint rounded-full flex items-center justify-center mx-auto mb-4 shadow-lg">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Media Library</h3>
                <p class="text-gray-600 mb-4">Access your therapy resources and materials</p>
                <a href="{{ route('media.library') }}" class="btn-pastel-primary inline-block">Browse Library</a>
            </div>

            <!-- AI Assistant -->
            <div class="card-pastel p-6 text-center hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                <div class="w-12 h-12 bg-gradient-to-br from-pastel-yellow to-pastel-orange rounded-full flex items-center justify-center mx-auto mb-4 shadow-lg">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">AI Assistant</h3>
                <p class="text-gray-600 mb-4">Get personalized therapy insights</p>
                <a href="{{ route('ai.assistant') }}" class="btn-pastel-primary inline-block">Chat with AI</a>
            </div>
        </div>

        <!-- Main Content Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Left Column - Therapy & Bookings -->
            <div class="lg:col-span-2 space-y-8">
                <!-- Recent Therapy Sessions -->
                <div class="card-pastel p-6">
                    <h3 class="text-xl font-semibold text-gray-900 mb-4">Recent Therapy Sessions</h3>
                    <div class="space-y-4">
                        @forelse(Auth::user()->therapySessions()->latest()->take(3)->get() as $session)
                            <div class="flex items-center space-x-4 p-4 bg-gradient-to-r from-pastel-purple/20 to-pastel-pink/20 rounded-lg border border-pastel-lavender hover:shadow-md transition-all duration-300">
                                <div class="flex-shrink-0">
                                    <div class="w-10 h-10 bg-gradient-to-br from-pastel-purple to-pastel-pink rounded-full flex items-center justify-center shadow-sm">
                                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="flex-1">
                                    <h4 class="font-medium text-gray-900">{{ $session->title }}</h4>
                                    <p class="text-sm text-gray-600">{{ $session->type }} • {{ $session->duration }}min</p>
                                </div>
                                <button class="btn-pastel-secondary text-sm">Play</button>
                            </div>
                        @empty
                            <div class="text-center py-8">
                                <div class="w-16 h-16 bg-gradient-to-br from-pastel-purple/30 to-pastel-pink/30 rounded-full flex items-center justify-center mx-auto mb-4">
                                    <svg class="w-8 h-8 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3"></path>
                                    </svg>
                                </div>
                                <p class="text-gray-600">No therapy sessions yet</p>
                                <a href="{{ route('therapy.sessions') }}" class="btn-pastel-primary mt-2 inline-block">Start Your First Session</a>
                            </div>
                        @endforelse
                    </div>
                </div>

                <!-- Upcoming Bookings -->
                <div class="card-pastel p-6">
                    <h3 class="text-xl font-semibold text-gray-900 mb-4">Upcoming Bookings</h3>
                    <div class="space-y-4">
                        @forelse(Auth::user()->bookings()->where('start_time', '>', now())->orderBy('start_time')->take(3)->get() as $booking)
                            <div class="flex items-center space-x-4 p-4 bg-gradient-to-r from-pastel-blue/20 to-pastel-purple/20 rounded-lg border border-pastel-lavender hover:shadow-md transition-all duration-300">
                                <div class="flex-shrink-0">
                                    <div class="w-10 h-10 bg-gradient-to-br from-pastel-blue to-pastel-purple rounded-full flex items-center justify-center shadow-sm">
                                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="flex-1">
                                    <h4 class="font-medium text-gray-900">{{ $booking->title }}</h4>
                                    <p class="text-sm text-gray-600">{{ $booking->start_time->format('M j, Y g:i A') }}</p>
                                </div>
                                <span class="px-3 py-1 rounded-full text-xs font-medium 
                                    {{ $booking->status === 'confirmed' ? 'bg-pastel-green text-green-800' : 
                                       ($booking->status === 'pending' ? 'bg-pastel-yellow text-yellow-800' : 'bg-gray-100 text-gray-800') }}">
                                    {{ ucfirst($booking->status) }}
                                </span>
                            </div>
                        @empty
                            <div class="text-center py-8">
                                <div class="w-16 h-16 bg-gradient-to-br from-pastel-blue/30 to-pastel-purple/30 rounded-full flex items-center justify-center mx-auto mb-4">
                                    <svg class="w-8 h-8 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                    </svg>
                                </div>
                                <p class="text-gray-600">No upcoming bookings</p>
                                <a href="{{ route('bookings.create') }}" class="btn-pastel-primary mt-2 inline-block">Schedule Appointment</a>
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>

            <!-- Right Column - Sidebar -->
            <div class="space-y-8">
                <!-- Game Server Status -->
                <div class="card-pastel p-6">
                    <h3 class="text-xl font-semibold text-gray-900 mb-4">Game Server Status</h3>
                    <div class="space-y-3">
                        @forelse(\App\Models\GameServer::where('is_active', true)->get() as $server)
                            <div class="flex items-center justify-between p-3 bg-gradient-to-r from-pastel-green/20 to-pastel-mint/20 rounded-lg border border-pastel-lavender">
                                <div>
                                    <h4 class="font-medium text-gray-900">{{ $server->name }}</h4>
                                    <p class="text-sm text-gray-600">{{ $server->player_count }}/{{ $server->max_players }} players</p>
                                </div>
                                <span class="server-status-{{ $server->status }}">
                                    {{ ucfirst($server->status) }}
                                </span>
                            </div>
                        @empty
                            <div class="text-center py-4">
                                <p class="text-gray-600 text-sm">No active servers</p>
                            </div>
                        @endforelse
                    </div>
                </div>

                <!-- Newsletter Signup -->
                <div class="newsletter-form">
                    <h3 class="text-xl font-semibold text-gray-900 mb-4">Stay Connected</h3>
                    <p class="text-gray-600 mb-4">Get mindfulness tips and updates delivered to your inbox.</p>
                    <form action="{{ route('newsletter.subscribe') }}" method="POST" class="space-y-3">
                        @csrf
                        <input type="email" name="email" placeholder="Enter your email" 
                               class="w-full px-4 py-2 border border-pastel-lavender rounded-lg focus:ring-2 focus:ring-pastel-blue focus:border-transparent bg-white/80">
                        <button type="submit" class="btn-pastel-primary w-full">Subscribe</button>
                    </form>
                </div>

                <!-- Quick Stats -->
                <div class="card-pastel p-6">
                    <h3 class="text-xl font-semibold text-gray-900 mb-4">Your Progress</h3>
                    <div class="space-y-4">
                        <div class="flex justify-between items-center p-3 bg-gradient-to-r from-pastel-purple/20 to-pastel-pink/20 rounded-lg">
                            <span class="text-gray-600">Sessions Completed</span>
                            <span class="font-semibold text-gray-900">{{ Auth::user()->therapySessions()->count() }}</span>
                        </div>
                        <div class="flex justify-between items-center p-3 bg-gradient-to-r from-pastel-blue/20 to-pastel-purple/20 rounded-lg">
                            <span class="text-gray-600">Total Hours</span>
                            <span class="font-semibold text-gray-900">{{ Auth::user()->therapySessions()->sum('duration') / 60 }}h</span>
                        </div>
                        <div class="flex justify-between items-center p-3 bg-gradient-to-r from-pastel-green/20 to-pastel-mint/20 rounded-lg">
                            <span class="text-gray-600">Media Files</span>
                            <span class="font-semibold text-gray-900">{{ Auth::user()->mediaLibrary()->count() }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
