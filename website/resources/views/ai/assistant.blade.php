<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('AI Assistant') }}
        </h2>
    </x-slot>

    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Chat Interface -->
            <div class="lg:col-span-2">
                <div class="card-pastel p-6 h-[600px] flex flex-col">
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 bg-gradient-to-br from-yellow-400 to-orange-400 rounded-full flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900">Mindfulness AI Assistant</h3>
                            <p class="text-sm text-gray-600">Ask me anything about mental wellness</p>
                        </div>
                    </div>

                    <!-- Chat Messages -->
                    <div id="chatMessages" class="flex-1 overflow-y-auto mb-4 space-y-4">
                        <!-- Welcome Message -->
                        <div class="flex items-start space-x-3">
                            <div class="w-8 h-8 bg-gradient-to-br from-yellow-400 to-orange-400 rounded-full flex items-center justify-center flex-shrink-0">
                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                                </svg>
                            </div>
                            <div class="bg-white rounded-lg p-4 shadow-sm max-w-xs lg:max-w-md">
                                <p class="text-gray-900">Hello! I'm your mindfulness AI assistant. I'm here to help you with stress, anxiety, meditation, therapy, and other mental wellness topics. How can I support you today?</p>
                                <p class="text-xs text-gray-500 mt-2">{{ now()->format('g:i A') }}</p>
                            </div>
                        </div>
                    </div>

                    <!-- Chat Input -->
                    <div class="border-t border-gray-200 pt-4">
                        <form id="chatForm" class="flex space-x-3">
                            @csrf
                            <input type="text" 
                                   id="messageInput"
                                   name="message" 
                                   placeholder="Type your message here..." 
                                   class="flex-1 px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-500 focus:border-transparent"
                                   required>
                            <button type="submit" 
                                    class="btn-pastel-primary px-6"
                                    id="sendButton">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                                </svg>
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="space-y-6">
                <!-- Document Upload -->
                <div class="card-pastel p-6">
                    <h3 class="text-lg font-semibold text-gray-900 mb-4">Upload Documents</h3>
                    <form action="{{ route('ai.upload-document') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
                        @csrf
                        <div>
                            <label for="title" class="block text-sm font-medium text-gray-700 mb-1">Document Title</label>
                            <input type="text" 
                                   name="title" 
                                   id="title"
                                   class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-500 focus:border-transparent"
                                   required>
                        </div>
                        <div>
                            <label for="file" class="block text-sm font-medium text-gray-700 mb-1">File</label>
                            <input type="file" 
                                   name="file" 
                                   id="file"
                                   accept=".pdf,.txt,.doc,.docx"
                                   class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-500 focus:border-transparent"
                                   required>
                            <p class="text-xs text-gray-500 mt-1">Supported: PDF, TXT, DOC, DOCX (max 10MB)</p>
                        </div>
                        <button type="submit" class="btn-pastel-primary w-full">
                            Upload Document
                        </button>
                    </form>
                </div>

                <!-- Recent Documents -->
                <div class="card-pastel p-6">
                    <h3 class="text-lg font-semibold text-gray-900 mb-4">Your Documents</h3>
                    <div class="space-y-3">
                        @forelse($documents as $document)
                            <div class="flex items-center space-x-3 p-3 bg-white rounded-lg border border-gray-100">
                                <div class="w-8 h-8 bg-gradient-to-br from-blue-400 to-purple-400 rounded-full flex items-center justify-center">
                                    <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                    </svg>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <p class="text-sm font-medium text-gray-900 truncate">{{ $document->title }}</p>
                                    <p class="text-xs text-gray-500">{{ $document->created_at->format('M j, Y') }}</p>
                                </div>
                            </div>
                        @empty
                            <p class="text-sm text-gray-500 text-center py-4">No documents uploaded yet</p>
                        @endforelse
                    </div>
                    @if($documents->count() > 0)
                        <a href="{{ route('ai.documents') }}" class="btn-pastel-secondary w-full mt-4 text-center">
                            View All Documents
                        </a>
                    @endif
                </div>

                <!-- Quick Actions -->
                <div class="card-pastel p-6">
                    <h3 class="text-lg font-semibold text-gray-900 mb-4">Quick Actions</h3>
                    <div class="space-y-3">
                        <button class="w-full text-left p-3 bg-white rounded-lg border border-gray-100 hover:bg-gray-50 transition-colors" 
                                onclick="sendQuickMessage('I\'m feeling stressed today')">
                            <p class="text-sm font-medium text-gray-900">I'm feeling stressed</p>
                        </button>
                        <button class="w-full text-left p-3 bg-white rounded-lg border border-gray-100 hover:bg-gray-50 transition-colors"
                                onclick="sendQuickMessage('Help me with anxiety')">
                            <p class="text-sm font-medium text-gray-900">Help with anxiety</p>
                        </button>
                        <button class="w-full text-left p-3 bg-white rounded-lg border border-gray-100 hover:bg-gray-50 transition-colors"
                                onclick="sendQuickMessage('Recommend meditation techniques')">
                            <p class="text-sm font-medium text-gray-900">Meditation techniques</p>
                        </button>
                        <button class="w-full text-left p-3 bg-white rounded-lg border border-gray-100 hover:bg-gray-50 transition-colors"
                                onclick="sendQuickMessage('I need help sleeping')">
                            <p class="text-sm font-medium text-gray-900">Sleep help</p>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function sendQuickMessage(message) {
            document.getElementById('messageInput').value = message;
            document.getElementById('chatForm').dispatchEvent(new Event('submit'));
        }

        document.getElementById('chatForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const messageInput = document.getElementById('messageInput');
            const sendButton = document.getElementById('sendButton');
            const message = messageInput.value.trim();
            
            if (!message) return;
            
            // Add user message to chat
            addMessage(message, 'user');
            messageInput.value = '';
            sendButton.disabled = true;
            
            // Send to server
            fetch('{{ route("ai.chat") }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: JSON.stringify({ message: message })
            })
            .then(response => response.json())
            .then(data => {
                addMessage(data.response, 'ai');
                sendButton.disabled = false;
            })
            .catch(error => {
                console.error('Error:', error);
                addMessage('Sorry, I encountered an error. Please try again.', 'ai');
                sendButton.disabled = false;
            });
        });
        
        function addMessage(message, sender) {
            const chatMessages = document.getElementById('chatMessages');
            const messageDiv = document.createElement('div');
            messageDiv.className = 'flex items-start space-x-3';
            
            const icon = sender === 'ai' ? 
                '<div class="w-8 h-8 bg-gradient-to-br from-yellow-400 to-orange-400 rounded-full flex items-center justify-center flex-shrink-0"><svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path></svg></div>' :
                '<div class="w-8 h-8 bg-gradient-to-br from-blue-400 to-purple-400 rounded-full flex items-center justify-center flex-shrink-0"><svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg></div>';
            
            const alignment = sender === 'user' ? 'justify-end' : 'justify-start';
            const bgColor = sender === 'user' ? 'bg-gradient-to-r from-blue-400 to-purple-400 text-white' : 'bg-white text-gray-900';
            
            messageDiv.innerHTML = `
                ${sender === 'ai' ? icon : ''}
                <div class="${bgColor} rounded-lg p-4 shadow-sm max-w-xs lg:max-w-md">
                    <p>${message}</p>
                    <p class="text-xs ${sender === 'user' ? 'text-blue-100' : 'text-gray-500'} mt-2">${new Date().toLocaleTimeString([], {hour: '2-digit', minute:'2-digit'})}</p>
                </div>
                ${sender === 'user' ? icon : ''}
            `;
            
            chatMessages.appendChild(messageDiv);
            chatMessages.scrollTop = chatMessages.scrollHeight;
        }
    </script>
</x-app-layout> 