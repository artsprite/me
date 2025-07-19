<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Therapy Sessions') }}
            </h2>
            <a href="{{ route('therapy.sessions.create') }}" class="btn-pastel-primary">
                Create New Session
            </a>
        </div>
    </x-slot>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Session Types Filter -->
        <div class="card-pastel p-6 mb-8">
            <div class="flex flex-wrap gap-4">
                <button class="px-4 py-2 rounded-lg bg-gradient-to-r from-purple-400 to-pink-400 text-white font-medium">
                    All Sessions
                </button>
                <button class="px-4 py-2 rounded-lg bg-white border border-gray-200 text-gray-700 hover:bg-gray-50">
                    Audio Therapy
                </button>
                <button class="px-4 py-2 rounded-lg bg-white border border-gray-200 text-gray-700 hover:bg-gray-50">
                    Meditation
                </button>
                <button class="px-4 py-2 rounded-lg bg-white border border-gray-200 text-gray-700 hover:bg-gray-50">
                    Journaling
                </button>
            </div>
        </div>

        <!-- Sessions Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @forelse($sessions as $session)
                <div class="card-pastel p-6 hover:transform hover:scale-105 transition-all duration-300">
                    <div class="flex items-center justify-between mb-4">
                        <div class="w-12 h-12 bg-gradient-to-br from-purple-400 to-pink-400 rounded-full flex items-center justify-center">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3"></path>
                            </svg>
                        </div>
                        <span class="px-3 py-1 rounded-full text-xs font-medium bg-green-100 text-green-800">
                            {{ ucfirst($session->type) }}
                        </span>
                    </div>
                    
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">{{ $session->title }}</h3>
                    <p class="text-gray-600 mb-4">{{ Str::limit($session->description, 100) }}</p>
                    
                    <div class="flex items-center justify-between mb-4">
                        <span class="text-sm text-gray-500">{{ $session->duration }} minutes</span>
                        <span class="text-sm text-gray-500">{{ $session->created_at->format('M j, Y') }}</span>
                    </div>
                    
                    <div class="flex space-x-2">
                        <a href="{{ route('therapy.sessions.play', $session) }}" class="btn-pastel-primary flex-1 text-center">
                            Start Session
                        </a>
                        <a href="{{ route('therapy.sessions.show', $session) }}" class="btn-pastel-secondary flex-1 text-center">
                            Details
                        </a>
                    </div>
                </div>
            @empty
                <div class="col-span-full text-center py-12">
                    <svg class="w-16 h-16 text-gray-400 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3"></path>
                    </svg>
                    <h3 class="text-lg font-medium text-gray-900 mb-2">No therapy sessions yet</h3>
                    <p class="text-gray-600 mb-4">Start your mindfulness journey by creating your first therapy session.</p>
                    <a href="{{ route('therapy.sessions.create') }}" class="btn-pastel-primary">Create Your First Session</a>
                </div>
            @endforelse
        </div>

        <!-- Pagination -->
        @if($sessions->hasPages())
            <div class="mt-8">
                {{ $sessions->links() }}
            </div>
        @endif
    </div>
</x-app-layout> 