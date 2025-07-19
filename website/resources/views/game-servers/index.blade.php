<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Game Server Status') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="card-pastel p-6 mb-8 text-center">
            <div class="w-16 h-16 bg-gradient-to-br from-green-400 to-blue-500 rounded-full flex items-center justify-center mx-auto mb-4">
                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                </svg>
            </div>
            <h1 class="text-3xl font-bold text-gray-900 mb-2">Game Server Status</h1>
            <p class="text-gray-600">Check if your favorite games are ready to play!</p>
        </div>

        <!-- Server Status Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @forelse($servers as $server)
                <div class="card-pastel p-6 hover:transform hover:scale-105 transition-all duration-300">
                    <!-- Server Icon -->
                    <div class="flex items-center justify-between mb-4">
                        <div class="w-12 h-12 bg-gradient-to-br from-blue-400 to-purple-400 rounded-full flex items-center justify-center">
                            @if($server->type === 'minecraft')
                                <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/>
                                </svg>
                            @elseif($server->type === 'roblox')
                                <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/>
                                </svg>
                            @else
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                            @endif
                        </div>
                        <span class="server-status-{{ $server->status }}">
                            {{ ucfirst($server->status) }}
                        </span>
                    </div>

                    <!-- Server Info -->
                    <h3 class="text-xl font-bold text-gray-900 mb-2">{{ $server->name }}</h3>
                    <p class="text-gray-600 mb-4">{{ $server->description }}</p>

                    <!-- Server Details -->
                    <div class="space-y-3 mb-4">
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-gray-500">Type:</span>
                            <span class="text-sm font-medium text-gray-900">{{ ucfirst($server->type) }}</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-gray-500">Version:</span>
                            <span class="text-sm font-medium text-gray-900">{{ $server->version }}</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-gray-500">Players:</span>
                            <span class="text-sm font-medium text-gray-900">{{ $server->player_count }}/{{ $server->max_players }}</span>
                        </div>
                    </div>

                    <!-- Player Progress Bar -->
                    <div class="mb-4">
                        <div class="flex justify-between text-sm text-gray-500 mb-1">
                            <span>Server Capacity</span>
                            <span>{{ $server->player_percentage }}%</span>
                        </div>
                        <div class="bg-gray-200 rounded-full h-2">
                            <div class="bg-gradient-to-r from-green-400 to-blue-400 h-2 rounded-full transition-all duration-300" 
                                 style="width: {{ $server->player_percentage }}%"></div>
                        </div>
                    </div>

                    <!-- Connect Button -->
                    <button class="w-full btn-pastel-primary {{ $server->status !== 'online' ? 'opacity-50 cursor-not-allowed' : '' }}" 
                            {{ $server->status !== 'online' ? 'disabled' : '' }}>
                        @if($server->status === 'online')
                            Connect to Server
                        @elseif($server->status === 'maintenance')
                            Under Maintenance
                        @else
                            Server Offline
                        @endif
                    </button>

                    <!-- Last Check -->
                    @if($server->last_check)
                        <p class="text-xs text-gray-400 mt-2 text-center">
                            Last checked: {{ $server->last_check->diffForHumans() }}
                        </p>
                    @endif
                </div>
            @empty
                <div class="col-span-full text-center py-12">
                    <svg class="w-16 h-16 text-gray-400 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                    <h3 class="text-lg font-medium text-gray-900 mb-2">No game servers available</h3>
                    <p class="text-gray-600">Check back later for server updates!</p>
                </div>
            @endforelse
        </div>

        <!-- Auto-refresh Info -->
        <div class="card-pastel p-4 mt-8 text-center">
            <p class="text-sm text-gray-600">
                <svg class="w-4 h-4 inline mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
                </svg>
                Server status updates automatically every 30 seconds
            </p>
        </div>
    </div>

    <script>
        // Auto-refresh functionality
        setInterval(function() {
            location.reload();
        }, 30000); // Refresh every 30 seconds
    </script>
</x-app-layout> 