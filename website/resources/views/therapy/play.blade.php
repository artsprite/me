<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center space-x-4">
            <a href="{{ route('therapy.sessions') }}" class="text-gray-600 hover:text-gray-900">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
            </a>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ $session->title }}
            </h2>
        </div>
    </x-slot>

    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="meditation-player">
            <!-- Session Info -->
            <div class="text-center mb-8">
                <div class="w-24 h-24 bg-gradient-to-br from-purple-400 to-pink-400 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3"></path>
                    </svg>
                </div>
                <h1 class="text-3xl font-bold text-gray-900 mb-2">{{ $session->title }}</h1>
                <p class="text-gray-600 mb-4">{{ $session->description }}</p>
                <div class="flex items-center justify-center space-x-4 text-sm text-gray-500">
                    <span>{{ $session->duration }} minutes</span>
                    <span>•</span>
                    <span>{{ ucfirst($session->type) }}</span>
                    <span>•</span>
                    <span>{{ $session->created_at->format('M j, Y') }}</span>
                </div>
            </div>

            <!-- Audio Player -->
            <div class="bg-white rounded-2xl p-8 shadow-lg mb-8">
                @if($session->audio_file)
                    <audio id="audioPlayer" class="w-full" controls preload="metadata">
                        <source src="{{ $session->audioUrl }}" type="audio/mpeg">
                        Your browser does not support the audio element.
                    </audio>
                @else
                    <!-- Simulated Audio Player for Demo -->
                    <div class="text-center py-8">
                        <div class="audio-waveform mb-4"></div>
                        <div class="flex items-center justify-center space-x-4">
                            <button class="w-16 h-16 bg-gradient-to-br from-purple-400 to-pink-400 rounded-full flex items-center justify-center text-white hover:scale-105 transition-transform">
                                <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M8 5v14l11-7z"/>
                                </svg>
                            </button>
                            <div class="flex-1 max-w-md">
                                <div class="bg-gray-200 rounded-full h-2">
                                    <div class="bg-gradient-to-r from-purple-400 to-pink-400 h-2 rounded-full" style="width: 0%"></div>
                                </div>
                                <div class="flex justify-between text-sm text-gray-500 mt-2">
                                    <span>0:00</span>
                                    <span>{{ $session->duration }}:00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            </div>

            <!-- Session Controls -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                <div class="card-pastel p-6 text-center">
                    <div class="w-12 h-12 bg-gradient-to-br from-blue-400 to-cyan-400 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="font-semibold text-gray-900 mb-2">Timer</h3>
                    <p class="text-gray-600 text-sm">Set a custom duration for your session</p>
                </div>

                <div class="card-pastel p-6 text-center">
                    <div class="w-12 h-12 bg-gradient-to-br from-green-400 to-emerald-400 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                        </svg>
                    </div>
                    <h3 class="font-semibold text-gray-900 mb-2">Favorites</h3>
                    <p class="text-gray-600 text-sm">Save this session to your favorites</p>
                </div>

                <div class="card-pastel p-6 text-center">
                    <div class="w-12 h-12 bg-gradient-to-br from-yellow-400 to-orange-400 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.367 2.684 3 3 0 00-5.367-2.684z"></path>
                        </svg>
                    </div>
                    <h3 class="font-semibold text-gray-900 mb-2">Share</h3>
                    <p class="text-gray-600 text-sm">Share this session with others</p>
                </div>
            </div>

            <!-- Session Notes -->
            <div class="card-pastel p-6">
                <h3 class="text-lg font-semibold text-gray-900 mb-4">Session Notes</h3>
                <textarea 
                    class="w-full p-4 border border-gray-200 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent resize-none"
                    rows="4"
                    placeholder="Write your thoughts, feelings, or insights from this session..."
                ></textarea>
                <div class="flex justify-end mt-4">
                    <button class="btn-pastel-primary">Save Notes</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Simple audio player functionality
        document.addEventListener('DOMContentLoaded', function() {
            const audioPlayer = document.getElementById('audioPlayer');
            if (audioPlayer) {
                audioPlayer.addEventListener('play', function() {
                    console.log('Session started');
                });
                
                audioPlayer.addEventListener('ended', function() {
                    console.log('Session completed');
                });
            }
        });
    </script>
</x-app-layout> 