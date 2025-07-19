<div>
    <div class="container py-5">
        <!-- Header -->
        <div class="text-center mb-5">
            <h1 class="display-4 fw-bold">Contact Us</h1>
            <p class="lead text-muted">Get in touch with our team for support, questions, or to schedule a session</p>
        </div>

        @if(session()->has('message'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('message') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        <div class="row">
            <!-- Contact Form -->
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h4 class="mb-0">
                            <i class="fas fa-envelope me-2"></i>
                            Send us a Message
                        </h4>
                    </div>
                    <div class="card-body">
                        <form wire:submit.prevent="submit">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="name" class="form-label">Full Name *</label>
                                    <input type="text" wire:model="name" id="name" class="form-control" required>
                                    @error('name') <span class="text-danger small">{{ $message }}</span> @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="email" class="form-label">Email Address *</label>
                                    <input type="email" wire:model="email" id="email" class="form-control" required>
                                    @error('email') <span class="text-danger small">{{ $message }}</span> @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="phone" class="form-label">Phone Number</label>
                                    <input type="tel" wire:model="phone" id="phone" class="form-control">
                                    @error('phone') <span class="text-danger small">{{ $message }}</span> @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="preferredContact" class="form-label">Preferred Contact Method *</label>
                                    <select wire:model="preferredContact" id="preferredContact" class="form-select" required>
                                        <option value="email">Email</option>
                                        <option value="phone">Phone</option>
                                    </select>
                                    @error('preferredContact') <span class="text-danger small">{{ $message }}</span> @enderror
                                </div>
                                <div class="col-12">
                                    <label for="subject" class="form-label">Subject *</label>
                                    <input type="text" wire:model="subject" id="subject" class="form-control" required>
                                    @error('subject') <span class="text-danger small">{{ $message }}</span> @enderror
                                </div>
                                <div class="col-12">
                                    <label for="message" class="form-label">Message *</label>
                                    <textarea wire:model="message" id="message" class="form-control" rows="6" 
                                              placeholder="Tell us how we can help you..." required></textarea>
                                    @error('message') <span class="text-danger small">{{ $message }}</span> @enderror
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary btn-lg">
                                        <i class="fas fa-paper-plane me-2"></i>Send Message
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Contact Information -->
            <div class="col-lg-4">
                <div class="card mb-4">
                    <div class="card-header bg-secondary text-white">
                        <h5 class="mb-0">
                            <i class="fas fa-info-circle me-2"></i>
                            Contact Information
                        </h5>
                    </div>
                    <div class="card-body">
                        <div class="contact-item mb-3">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-map-marker-alt text-primary me-3" style="font-size: 1.2rem;"></i>
                                <div>
                                    <strong>Address</strong><br>
                                    <small class="text-muted">123 Wellness Street<br>Art Therapy District<br>Wellness City, WC 12345</small>
                                </div>
                            </div>
                        </div>
                        <div class="contact-item mb-3">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-phone text-primary me-3" style="font-size: 1.2rem;"></i>
                                <div>
                                    <strong>Phone</strong><br>
                                    <small class="text-muted">+1 (555) 123-4567</small>
                                </div>
                            </div>
                        </div>
                        <div class="contact-item mb-3">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-envelope text-primary me-3" style="font-size: 1.2rem;"></i>
                                <div>
                                    <strong>Email</strong><br>
                                    <small class="text-muted">info@salinashelton.com</small>
                                </div>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-clock text-primary me-3" style="font-size: 1.2rem;"></i>
                                <div>
                                    <strong>Hours</strong><br>
                                    <small class="text-muted">Mon-Fri: 9:00 AM - 6:00 PM<br>Sat: 10:00 AM - 4:00 PM<br>Sun: Closed</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Quick Links -->
                <div class="card">
                    <div class="card-header bg-info text-white">
                        <h5 class="mb-0">
                            <i class="fas fa-link me-2"></i>
                            Quick Links
                        </h5>
                    </div>
                    <div class="card-body">
                        <div class="list-group list-group-flush">
                            <a href="{{ route('booking') }}" class="list-group-item list-group-item-action">
                                <i class="fas fa-calendar-alt me-2"></i>Book a Session
                            </a>
                            <a href="{{ route('mood-tracker') }}" class="list-group-item list-group-item-action">
                                <i class="fas fa-heart me-2"></i>Mood Tracker
                            </a>
                            <a href="{{ route('media-player') }}" class="list-group-item list-group-item-action">
                                <i class="fas fa-music me-2"></i>Wellness Media
                            </a>
                            <a href="{{ route('game-servers') }}" class="list-group-item list-group-item-action">
                                <i class="fas fa-gamepad me-2"></i>Game Servers
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- FAQ Section -->
        <div class="row mt-5">
            <div class="col-12">
                <div class="card">
                    <div class="card-header bg-success text-white">
                        <h4 class="mb-0">
                            <i class="fas fa-question-circle me-2"></i>
                            Frequently Asked Questions
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="faq-item mb-4">
                                    <h5 class="fw-bold">How do I book an art therapy session?</h5>
                                    <p class="text-muted">You can book a session through our online booking system. Simply visit the booking page and select your preferred therapist and time slot.</p>
                                </div>
                                <div class="faq-item mb-4">
                                    <h5 class="fw-bold">What should I expect in my first session?</h5>
                                    <p class="text-muted">Your first session will include an introduction, discussion of your goals, and a gentle introduction to art therapy techniques.</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="faq-item mb-4">
                                    <h5 class="fw-bold">Do I need to bring my own art supplies?</h5>
                                    <p class="text-muted">No, we provide all necessary art supplies. However, you're welcome to bring your own if you prefer.</p>
                                </div>
                                <div class="faq-item mb-4">
                                    <h5 class="fw-bold">Is art therapy suitable for children?</h5>
                                    <p class="text-muted">Yes, art therapy is excellent for children and can help with emotional expression, stress relief, and creative development.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .contact-item {
            padding: 10px 0;
            border-bottom: 1px solid #f0f0f0;
        }
        
        .contact-item:last-child {
            border-bottom: none;
        }
        
        .faq-item h5 {
            color: var(--primary-color);
            font-size: 1.1rem;
        }
        
        .list-group-item {
            border: none;
            padding: 12px 0;
            color: var(--text-color);
            transition: all 0.3s ease;
        }
        
        .list-group-item:hover {
            color: var(--primary-color);
            background-color: #f8f9fa;
        }
        
        .form-control, .form-select {
            border-radius: 10px;
            border: 2px solid #e9ecef;
            transition: all 0.3s ease;
        }
        
        .form-control:focus, .form-select:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.2rem rgba(248, 180, 217, 0.25);
        }
    </style>
</div>
