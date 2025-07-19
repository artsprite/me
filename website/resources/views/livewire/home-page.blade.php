<div>
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-4 fw-bold mb-4">
                        Find Peace Through Creative Expression
                    </h1>
                    <p class="lead mb-4">
                        Welcome to Salina's Art Therapy Wellness, where we combine the healing power of art therapy with modern wellness practices to help you find balance, reduce stress, and express your emotions through creativity.
                    </p>
                    <div class="d-flex gap-3">
                        <a href="{{ route('mood-tracker') }}" class="btn btn-light btn-lg">
                            🎨 Start Your Journey
                        </a>
                        <a href="{{ route('booking') }}" class="btn btn-outline-light btn-lg">
                            📅 Book a Session
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 text-center">
                    <div class="hero-image">
                        <i class="fas fa-palette" style="font-size: 8rem; opacity: 0.8;"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold">Our Wellness Services</h2>
                <p class="lead text-muted">Discover the tools and resources to support your mental wellness journey</p>
            </div>
            
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 text-center p-4">
                        <div class="card-body">
                            <div class="mb-3">
                                <i class="fas fa-heart" style="font-size: 3rem; color: var(--primary-color);"></i>
                            </div>
                            <h4 class="card-title">Mood Tracking</h4>
                            <p class="card-text">Track your emotional journey with our intuitive mood logging system. Understand your patterns and triggers.</p>
                            <a href="{{ route('mood-tracker') }}" class="btn btn-primary">Start Tracking</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="card h-100 text-center p-4">
                        <div class="card-body">
                            <div class="mb-3">
                                <i class="fas fa-music" style="font-size: 3rem; color: var(--secondary-color);"></i>
                            </div>
                            <h4 class="card-title">Wellness Media</h4>
                            <p class="card-text">Access our curated library of meditation, art therapy sessions, and relaxation content.</p>
                            <a href="{{ route('media-player') }}" class="btn btn-primary">Explore Media</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="card h-100 text-center p-4">
                        <div class="card-body">
                            <div class="mb-3">
                                <i class="fas fa-calendar-alt" style="font-size: 3rem; color: var(--accent-color);"></i>
                            </div>
                            <h4 class="card-title">Art Therapy Sessions</h4>
                            <p class="card-text">Book personalized art therapy sessions with our licensed therapists for individual or group sessions.</p>
                            <a href="{{ route('booking') }}" class="btn btn-primary">Book Session</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Media Section -->
    @if($featuredMedia->count() > 0)
    <section class="py-5" style="background-color: #f8f9fa;">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold">Featured Wellness Content</h2>
                <p class="lead text-muted">Explore our most popular meditation and art therapy resources</p>
            </div>
            
            <div class="row g-4">
                @foreach($featuredMedia as $media)
                <div class="col-md-4">
                    <div class="media-card">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3">
                                @if($media->type === 'audio')
                                    <i class="fas fa-music me-2" style="color: var(--primary-color);"></i>
                                @elseif($media->type === 'video')
                                    <i class="fas fa-video me-2" style="color: var(--secondary-color);"></i>
                                @else
                                    <i class="fas fa-file-alt me-2" style="color: var(--accent-color);"></i>
                                @endif
                                <span class="badge bg-primary">{{ ucfirst($media->type) }}</span>
                            </div>
                            <h5 class="card-title">{{ $media->title }}</h5>
                            <p class="card-text">{{ Str::limit($media->description, 100) }}</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <small class="text-muted">
                                    @if($media->duration)
                                        {{ $media->duration_human }}
                                    @else
                                        {{ $media->file_size_human }}
                                    @endif
                                </small>
                                <a href="{{ route('media.download', $media->id) }}" class="btn btn-sm btn-outline-primary">
                                    <i class="fas fa-download"></i> Download
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            
            <div class="text-center mt-4">
                <a href="{{ route('media-player') }}" class="btn btn-primary btn-lg">View All Media</a>
            </div>
        </div>
    </section>
    @endif

    <!-- Game Servers Section -->
    @if($onlineServers->count() > 0)
    <section class="py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold">Child-Friendly Gaming</h2>
                <p class="lead text-muted">Safe and therapeutic gaming environments for relaxation and creativity</p>
            </div>
            
            <div class="row g-4">
                @foreach($onlineServers as $server)
                <div class="col-md-4">
                    <div class="server-status {{ $server->status }}">
                        <div class="d-flex justify-content-between align-items-start">
                            <div>
                                <h5 class="mb-1">{{ $server->name }}</h5>
                                <p class="mb-2">{{ $server->description }}</p>
                                <div class="d-flex align-items-center">
                                    <span class="me-2">{{ $server->status_emoji }}</span>
                                    <span class="badge bg-light text-dark">{{ ucfirst($server->status) }}</span>
                                </div>
                            </div>
                            <div class="text-end">
                                <div class="mb-1">
                                    <small>{{ $server->current_players }}/{{ $server->max_players }} players</small>
                                </div>
                                <div class="progress" style="width: 60px; height: 6px;">
                                    <div class="progress-bar" style="width: {{ $server->player_percentage }}%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            
            <div class="text-center mt-4">
                <a href="{{ route('game-servers') }}" class="btn btn-primary btn-lg">View All Servers</a>
            </div>
        </div>
    </section>
    @endif

    <!-- Newsletter Section -->
    <section class="py-5" style="background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h2 class="text-white fw-bold mb-3">Stay Connected</h2>
                    <p class="text-white-50 mb-4">
                        Join our community of {{ $totalSubscribers }}+ wellness enthusiasts and receive weekly tips, guided meditations, and art therapy inspiration.
                    </p>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body p-4">
                            <h5 class="card-title mb-3">Subscribe to Our Newsletter</h5>
                            
                            @if(session()->has('message'))
                                <div class="alert alert-success">
                                    {{ session('message') }}
                                </div>
                            @endif
                            
                            <form wire:submit.prevent="signupNewsletter">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <input type="text" wire:model="firstName" class="form-control" placeholder="First Name" required>
                                        @error('firstName') <span class="text-danger small">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" wire:model="lastName" class="form-control" placeholder="Last Name" required>
                                        @error('lastName') <span class="text-danger small">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="col-12">
                                        <input type="email" wire:model="email" class="form-control" placeholder="Email Address" required>
                                        @error('email') <span class="text-danger small">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary w-100">
                                            <i class="fas fa-envelope me-2"></i>Subscribe
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h2 class="display-5 fw-bold mb-4">About Salina's Art Therapy Wellness</h2>
                    <p class="lead mb-4">
                        We believe in the transformative power of creative expression and mindfulness practices. Our platform combines traditional art therapy techniques with modern digital tools to provide accessible, effective wellness support.
                    </p>
                    <div class="row g-3">
                        <div class="col-6">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-check-circle text-success me-2"></i>
                                <span>Licensed Therapists</span>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-check-circle text-success me-2"></i>
                                <span>Safe Environment</span>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-check-circle text-success me-2"></i>
                                <span>24/7 Access</span>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-check-circle text-success me-2"></i>
                                <span>Evidence-Based</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 text-center">
                    <div class="about-image">
                        <i class="fas fa-paint-brush" style="font-size: 10rem; color: var(--primary-color); opacity: 0.6;"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
