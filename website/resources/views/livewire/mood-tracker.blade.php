<div>
    <div class="container py-5">
        <!-- Header -->
        <div class="text-center mb-5">
            <h1 class="display-4 fw-bold">Mood Tracker</h1>
            <p class="lead text-muted">Track your emotional journey and understand your patterns</p>
        </div>

        @if(session()->has('message'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('message') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        @if(session()->has('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        <div class="row">
            <!-- Mood Log Form -->
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h4 class="mb-0">
                            <i class="fas fa-heart me-2"></i>
                            How are you feeling today?
                        </h4>
                    </div>
                    <div class="card-body">
                        @if(!$showForm)
                            <div class="text-center py-4">
                                <p class="lead mb-4">Take a moment to reflect on your current emotional state</p>
                                <button wire:click="toggleForm" class="btn btn-primary btn-lg">
                                    <i class="fas fa-plus me-2"></i>Log Your Mood
                                </button>
                            </div>
                        @else
                            <form wire:submit.prevent="saveMoodLog">
                                <!-- Mood Selection -->
                                <div class="mb-4">
                                    <label class="form-label fw-bold">Select your mood:</label>
                                    <div class="row g-3">
                                        @foreach($moods as $moodKey => $moodData)
                                            <div class="col-md-4 col-sm-6">
                                                <div class="mood-option {{ $mood === $moodKey ? 'selected' : '' }}" 
                                                     wire:click="selectMood('{{ $moodKey }}')">
                                                    <div class="mood-emoji {{ $moodData['color'] }}">{{ $moodData['emoji'] }}</div>
                                                    <div class="mood-label">{{ $moodData['label'] }}</div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>

                                <!-- Mood Level Slider -->
                                <div class="mb-4">
                                    <label class="form-label fw-bold">Mood intensity (1-10):</label>
                                    <div class="d-flex align-items-center">
                                        <span class="me-3">😢</span>
                                        <input type="range" wire:model="moodLevel" min="1" max="10" class="form-range flex-grow-1 me-3">
                                        <span>😄</span>
                                        <span class="ms-3 badge bg-primary">{{ $moodLevel }}/10</span>
                                    </div>
                                </div>

                                <!-- Activities -->
                                <div class="mb-4">
                                    <label class="form-label fw-bold">What activities did you do today?</label>
                                    <div class="row g-2">
                                        @foreach($activities as $activity)
                                            <div class="col-md-3 col-sm-4 col-6">
                                                <div class="activity-option {{ in_array($activity, $selectedActivities) ? 'selected' : '' }}"
                                                     wire:click="toggleActivity('{{ $activity }}')">
                                                    <i class="fas fa-{{ $activity === 'exercise' ? 'dumbbell' : ($activity === 'meditation' ? 'om' : ($activity === 'reading' ? 'book' : ($activity === 'art' ? 'paint-brush' : ($activity === 'music' ? 'music' : ($activity === 'cooking' ? 'utensils' : ($activity === 'walking' ? 'walking' : ($activity === 'socializing' ? 'users' : ($activity === 'work' ? 'briefcase' : ($activity === 'sleep' ? 'bed' : ($activity === 'gaming' ? 'gamepad' : 'leaf')))))))))) }} me-2"></i>
                                                    {{ ucfirst(str_replace('_', ' ', $activity)) }}
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>

                                <!-- Triggers -->
                                <div class="mb-4">
                                    <label class="form-label fw-bold">What might have triggered this mood?</label>
                                    <div class="row g-2">
                                        @foreach($triggers as $trigger)
                                            <div class="col-md-3 col-sm-4 col-6">
                                                <div class="trigger-option {{ in_array($trigger, $selectedTriggers) ? 'selected' : '' }}"
                                                     wire:click="toggleTrigger('{{ $trigger }}')">
                                                    <i class="fas fa-{{ $trigger === 'work_stress' ? 'briefcase' : ($trigger === 'relationship' ? 'heart' : ($trigger === 'health' ? 'heartbeat' : ($trigger === 'financial' ? 'dollar-sign' : ($trigger === 'social' ? 'users' : ($trigger === 'environmental' ? 'leaf' : ($trigger === 'lack_of_sleep' ? 'bed' : ($trigger === 'diet' ? 'apple-alt' : ($trigger === 'exercise' ? 'dumbbell' : 'cloud')))))))) }} me-2"></i>
                                                    {{ ucfirst(str_replace('_', ' ', $trigger)) }}
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>

                                <!-- Notes -->
                                <div class="mb-4">
                                    <label for="notes" class="form-label fw-bold">Additional notes (optional):</label>
                                    <textarea wire:model="notes" id="notes" class="form-control" rows="4" 
                                              placeholder="Share any thoughts, feelings, or observations about your day..."></textarea>
                                    @error('notes') <span class="text-danger small">{{ $message }}</span> @enderror
                                </div>

                                <!-- Privacy -->
                                <div class="mb-4">
                                    <div class="form-check">
                                        <input wire:model="isPrivate" class="form-check-input" type="checkbox" id="isPrivate">
                                        <label class="form-check-label" for="isPrivate">
                                            <i class="fas fa-lock me-1"></i>Keep this entry private (only visible to you)
                                        </label>
                                    </div>
                                </div>

                                <!-- Submit Buttons -->
                                <div class="d-flex gap-3">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fas fa-save me-2"></i>Save Mood Log
                                    </button>
                                    <button type="button" wire:click="toggleForm" class="btn btn-outline-secondary">
                                        <i class="fas fa-times me-2"></i>Cancel
                                    </button>
                                </div>
                            </form>
                        @endif
                    </div>
                </div>
            </div>

            <!-- Recent Mood Logs -->
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header bg-secondary text-white">
                        <h5 class="mb-0">
                            <i class="fas fa-history me-2"></i>
                            Recent Mood Logs
                        </h5>
                    </div>
                    <div class="card-body">
                        @if(count($recentMoodLogs) > 0)
                            @foreach($recentMoodLogs as $log)
                                <div class="mood-log-entry mb-3 p-3 border rounded">
                                    <div class="d-flex justify-content-between align-items-start">
                                        <div>
                                            <div class="d-flex align-items-center mb-2">
                                                <span class="mood-emoji me-2">{{ $log->mood_emoji }}</span>
                                                <span class="fw-bold">{{ $moods[$log->mood]['label'] ?? ucfirst(str_replace('_', ' ', $log->mood)) }}</span>
                                                <span class="badge bg-primary ms-2">{{ $log->mood_level }}/10</span>
                                                @if($log->is_private)
                                                    <i class="fas fa-lock text-muted ms-2" title="Private"></i>
                                                @endif
                                            </div>
                                            @if($log->notes)
                                                <p class="mb-2 small">{{ Str::limit($log->notes, 100) }}</p>
                                            @endif
                                            <div class="small text-muted">
                                                {{ $log->created_at->format('M j, Y g:i A') }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div class="text-center py-4">
                                <i class="fas fa-chart-line text-muted" style="font-size: 3rem;"></i>
                                <p class="text-muted mt-2">No mood logs yet. Start tracking to see your patterns!</p>
                            </div>
                        @endif
                    </div>
                </div>

                <!-- Mood Insights -->
                <div class="card mt-4">
                    <div class="card-header bg-info text-white">
                        <h5 class="mb-0">
                            <i class="fas fa-lightbulb me-2"></i>
                            Mood Insights
                        </h5>
                    </div>
                    <div class="card-body">
                        <div class="insight-item mb-3">
                            <h6 class="fw-bold">Why track your mood?</h6>
                            <p class="small text-muted">Understanding your emotional patterns helps identify triggers and develop coping strategies.</p>
                        </div>
                        <div class="insight-item mb-3">
                            <h6 class="fw-bold">Privacy First</h6>
                            <p class="small text-muted">Your mood logs are private by default. Share only what you're comfortable with.</p>
                        </div>
                        <div class="insight-item">
                            <h6 class="fw-bold">Regular Check-ins</h6>
                            <p class="small text-muted">Try to log your mood at least once daily for the best insights.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .mood-option {
            text-align: center;
            padding: 15px;
            border: 2px solid #e9ecef;
            border-radius: 15px;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .mood-option:hover {
            border-color: var(--primary-color);
            transform: translateY(-2px);
        }
        
        .mood-option.selected {
            border-color: var(--primary-color);
            background-color: var(--primary-color);
            color: white;
        }
        
        .mood-emoji {
            font-size: 2rem;
            margin-bottom: 5px;
        }
        
        .mood-label {
            font-weight: 500;
        }
        
        .activity-option, .trigger-option {
            padding: 8px 12px;
            border: 1px solid #dee2e6;
            border-radius: 20px;
            cursor: pointer;
            transition: all 0.3s ease;
            font-size: 0.9rem;
        }
        
        .activity-option:hover, .trigger-option:hover {
            border-color: var(--primary-color);
            background-color: #f8f9fa;
        }
        
        .activity-option.selected, .trigger-option.selected {
            background-color: var(--primary-color);
            color: white;
            border-color: var(--primary-color);
        }
        
        .mood-log-entry {
            background-color: #f8f9fa;
            transition: all 0.3s ease;
        }
        
        .mood-log-entry:hover {
            background-color: #e9ecef;
        }
        
        .form-range::-webkit-slider-thumb {
            background: var(--primary-color);
        }
        
        .form-range::-moz-range-thumb {
            background: var(--primary-color);
        }
    </style>
</div>
