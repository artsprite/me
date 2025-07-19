<div>
    <div class="container py-5">
        <!-- Header -->
        <div class="text-center mb-5">
            <h1 class="display-4 fw-bold">Book Your Art Therapy Session</h1>
            <p class="lead text-muted">Schedule a personalized session with our licensed art therapists</p>
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
            <!-- Booking Form -->
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h4 class="mb-0">
                            <i class="fas fa-calendar-alt me-2"></i>
                            Schedule Your Session
                        </h4>
                    </div>
                    <div class="card-body">
                        <!-- Step 1: Select Date -->
                        <div class="mb-4">
                            <label class="form-label fw-bold">Step 1: Select Date</label>
                            <input type="date" wire:model.live="selectedDate" class="form-control" min="{{ date('Y-m-d', strtotime('+1 day')) }}">
                            @error('selectedDate') <span class="text-danger small">{{ $message }}</span> @enderror
                        </div>

                        <!-- Step 2: Select Therapist -->
                        <div class="mb-4">
                            <label class="form-label fw-bold">Step 2: Select Therapist</label>
                            <select wire:model.live="selectedTherapist" class="form-select">
                                <option value="">Choose a therapist...</option>
                                @foreach($therapists as $therapist)
                                    <option value="{{ $therapist->id }}">
                                        {{ $therapist->name }} - {{ $therapist->therapistProfile->specialization }}
                                        (Rating: {{ $therapist->therapistProfile->rating }}/5)
                                    </option>
                                @endforeach
                            </select>
                            @error('selectedTherapist') <span class="text-danger small">{{ $message }}</span> @enderror
                        </div>

                        <!-- Step 3: Select Time Slot -->
                        @if($selectedTherapist && $selectedDate)
                        <div class="mb-4">
                            <label class="form-label fw-bold">Step 3: Select Time Slot</label>
                            <p class="text-muted mb-3">Available times for {{ $currentDate }}</p>
                            
                            @if(count($availableSlots) > 0)
                                <div class="row g-2">
                                    @foreach($availableSlots as $slot)
                                        <div class="col-md-3 col-sm-4 col-6">
                                            <button wire:click="selectSlot('{{ $slot }}')" class="btn btn-outline-primary w-100">
                                                {{ \Carbon\Carbon::parse($slot)->format('g:i A') }}
                                            </button>
                                        </div>
                                    @endforeach
                                </div>
                            @else
                                <div class="alert alert-info">
                                    <i class="fas fa-info-circle me-2"></i>
                                    No available slots for this date. Please select another date or therapist.
                                </div>
                            @endif
                        </div>
                        @endif

                        <!-- Booking Form Modal -->
                        @if($showBookingForm)
                        <div class="booking-form-overlay">
                            <div class="card">
                                <div class="card-header bg-success text-white">
                                    <h5 class="mb-0">
                                        <i class="fas fa-check-circle me-2"></i>
                                        Confirm Your Booking
                                    </h5>
                                </div>
                                <div class="card-body">
                                    <form wire:submit.prevent="bookSession">
                                        <div class="row g-3">
                                            <div class="col-md-6">
                                                <label class="form-label">Date</label>
                                                <input type="text" value="{{ $currentDate }}" class="form-control" readonly>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Time</label>
                                                <input type="text" value="{{ \Carbon\Carbon::parse($selectedTime)->format('g:i A') }}" class="form-control" readonly>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Therapist</label>
                                                <input type="text" value="{{ $therapists->find($selectedTherapist)->name ?? '' }}" class="form-control" readonly>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Session Type *</label>
                                                <select wire:model="sessionType" class="form-select" required>
                                                    <option value="individual">Individual Session</option>
                                                    <option value="group">Group Session</option>
                                                    <option value="online">Online Session</option>
                                                    <option value="in_person">In-Person Session</option>
                                                </select>
                                                @error('sessionType') <span class="text-danger small">{{ $message }}</span> @enderror
                                            </div>
                                            <div class="col-12">
                                                <label class="form-label">Additional Notes</label>
                                                <textarea wire:model="notes" class="form-control" rows="3" 
                                                          placeholder="Any specific concerns, goals, or preferences..."></textarea>
                                                @error('notes') <span class="text-danger small">{{ $message }}</span> @enderror
                                            </div>
                                            <div class="col-12">
                                                <div class="d-flex gap-3">
                                                    <button type="submit" class="btn btn-success">
                                                        <i class="fas fa-check me-2"></i>Confirm Booking
                                                    </button>
                                                    <button type="button" wire:click="cancelBooking" class="btn btn-outline-secondary">
                                                        <i class="fas fa-times me-2"></i>Cancel
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4">
                <!-- Therapist Information -->
                @if($selectedTherapist)
                <div class="card mb-4">
                    <div class="card-header bg-info text-white">
                        <h5 class="mb-0">
                            <i class="fas fa-user-md me-2"></i>
                            Therapist Information
                        </h5>
                    </div>
                    <div class="card-body">
                        @php $therapist = $therapists->find($selectedTherapist) @endphp
                        <div class="text-center mb-3">
                            <i class="fas fa-user-circle text-primary" style="font-size: 3rem;"></i>
                            <h5 class="mt-2">{{ $therapist->name }}</h5>
                            <p class="text-muted">{{ $therapist->therapistProfile->specialization }}</p>
                        </div>
                        <div class="mb-3">
                            <div class="d-flex justify-content-between">
                                <span>Rating:</span>
                                <span class="fw-bold">{{ $therapist->therapistProfile->rating }}/5 ⭐</span>
                            </div>
                            <div class="d-flex justify-content-between">
                                <span>Experience:</span>
                                <span class="fw-bold">{{ $therapist->therapistProfile->total_sessions }} sessions</span>
                            </div>
                            <div class="d-flex justify-content-between">
                                <span>Availability:</span>
                                <span class="fw-bold">{{ $therapist->therapistProfile->availability_percentage }}%</span>
                            </div>
                        </div>
                        <p class="small text-muted">{{ $therapist->therapistProfile->bio }}</p>
                    </div>
                </div>
                @endif

                <!-- Recent Bookings -->
                @if(Auth::check() && $bookings->count() > 0)
                <div class="card mb-4">
                    <div class="card-header bg-secondary text-white">
                        <h5 class="mb-0">
                            <i class="fas fa-history me-2"></i>
                            Your Recent Bookings
                        </h5>
                    </div>
                    <div class="card-body">
                        @foreach($bookings as $booking)
                        <div class="booking-item mb-3 p-3 border rounded">
                            <div class="d-flex justify-content-between align-items-start">
                                <div>
                                    <h6 class="mb-1">{{ $booking->title }}</h6>
                                    <p class="small text-muted mb-1">
                                        {{ $booking->start_time->format('M j, Y g:i A') }}
                                    </p>
                                    <p class="small text-muted mb-0">
                                        with {{ $booking->therapist->name }}
                                    </p>
                                </div>
                                <span class="badge bg-{{ $booking->status === 'confirmed' ? 'success' : ($booking->status === 'pending' ? 'warning' : 'secondary') }}">
                                    {{ ucfirst($booking->status) }}
                                </span>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endif

                <!-- Session Types -->
                <div class="card">
                    <div class="card-header bg-warning text-dark">
                        <h5 class="mb-0">
                            <i class="fas fa-info-circle me-2"></i>
                            Session Types
                        </h5>
                    </div>
                    <div class="card-body">
                        <div class="session-type mb-3">
                            <h6 class="fw-bold">Individual Session</h6>
                            <p class="small text-muted">One-on-one personalized art therapy session tailored to your needs.</p>
                        </div>
                        <div class="session-type mb-3">
                            <h6 class="fw-bold">Group Session</h6>
                            <p class="small text-muted">Collaborative art therapy with others in a supportive group environment.</p>
                        </div>
                        <div class="session-type mb-3">
                            <h6 class="fw-bold">Online Session</h6>
                            <p class="small text-muted">Virtual art therapy session from the comfort of your home.</p>
                        </div>
                        <div class="session-type">
                            <h6 class="fw-bold">In-Person Session</h6>
                            <p class="small text-muted">Traditional face-to-face art therapy at our wellness center.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .booking-form-overlay {
            position: relative;
            background: rgba(255, 255, 255, 0.95);
            border-radius: 15px;
            padding: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }
        
        .booking-item {
            background-color: #f8f9fa;
            transition: all 0.3s ease;
        }
        
        .booking-item:hover {
            background-color: #e9ecef;
        }
        
        .session-type h6 {
            color: var(--primary-color);
            font-size: 1rem;
        }
        
        .btn-outline-primary:hover {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
        }
        
        .form-control:read-only {
            background-color: #f8f9fa;
        }
    </style>
</div>
