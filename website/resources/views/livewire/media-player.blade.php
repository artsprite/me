<div>
    <div class="container py-5">
        <!-- Header -->
        <div class="text-center mb-5">
            <h1 class="display-4 fw-bold">Wellness Media Library</h1>
            <p class="lead text-muted">Discover meditation, art therapy sessions, and relaxation content</p>
        </div>

        @if(session()->has('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        <!-- Featured Media Section -->
        @if(count($featuredMedia) > 0)
        <div class="mb-5">
            <h3 class="mb-4">Featured Content</h3>
            <div class="row g-4">
                @foreach($featuredMedia as $media)
                @if(is_object($media) && isset($media->type))
                <div class="col-md-4">
                    <div class="media-card featured">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3">
                                @if(is_string($media->type) && $media->type === 'audio')
                                    <i class="fas fa-music me-2" style="color: var(--primary-color); font-size: 1.5rem;"></i>
                                @elseif(is_string($media->type) && $media->type === 'video')
                                    <i class="fas fa-video me-2" style="color: var(--secondary-color); font-size: 1.5rem;"></i>
                                @else
                                    <i class="fas fa-file-alt me-2" style="color: var(--accent-color); font-size: 1.5rem;"></i>
                                @endif
                                <span class="badge bg-warning">Featured</span>
                            </div>
                            <h5 class="card-title">{{ $media->title }}</h5>
                            <p class="card-text">{{ Str::limit($media->description, 120) }}</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <small class="text-muted">
                                    @if($media->duration)
                                        {{ $media->duration_human }}
                                    @else
                                        {{ $media->file_size_human }}
                                    @endif
                                </small>
                                <div class="btn-group">
                                    @if(is_string($media->type) && ($media->type === 'audio' || $media->type === 'video'))
                                        <button wire:click="playMedia({{ $media->id }})" class="btn btn-sm btn-primary">
                                            <i class="fas fa-play"></i> Play
                                        </button>
                                    @endif
                                    <button wire:click="downloadMedia({{ $media->id }})" class="btn btn-sm btn-outline-primary">
                                        <i class="fas fa-download"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
            </div>
        </div>
        @endif

        <!-- Search and Filters -->
        <div class="card mb-4">
            <div class="card-body">
                <div class="row g-3">
                    <div class="col-md-6">
                        <input wire:model.live.debounce.300ms="search" type="text" class="form-control" placeholder="Search media...">
                    </div>
                    <div class="col-md-3">
                        <select wire:model.live="type" class="form-select">
                            <option value="">All Types</option>
                            @foreach($types as $key => $label)
                                <option value="{{ $key }}">{{ $label }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-3">
                        <select wire:model.live="sortBy" class="form-select">
                            <option value="created_at">Date Added</option>
                            <option value="title">Title</option>
                            <option value="download_count">Downloads</option>
                            <option value="view_count">Views</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <!-- Media Grid -->
        <div class="row g-4">
            @if($media && (is_array($media) || method_exists($media, 'items')))
            @forelse($media as $item)
            @if(is_object($item) && isset($item->id) && $item instanceof \App\Models\MediaLibrary)
            <div class="col-lg-4 col-md-6">
                <div class="media-card">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                            @if(is_string($item->type) && $item->type === 'audio')
                                <i class="fas fa-music me-2" style="color: var(--primary-color);"></i>
                            @elseif(is_string($item->type) && $item->type === 'video')
                                <i class="fas fa-video me-2" style="color: var(--secondary-color);"></i>
                            @else
                                <i class="fas fa-file-alt me-2" style="color: var(--accent-color);"></i>
                            @endif
                            <span class="badge bg-primary">{{ is_string($item->type) ? ucfirst($item->type) : 'Unknown' }}</span>
                        </div>
                        <h5 class="card-title">{{ $item->title }}</h5>
                        <p class="card-text">{{ Str::limit($item->description, 100) }}</p>
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <small class="text-muted">
                                @if($item->duration)
                                    {{ $item->duration_human }}
                                @else
                                    {{ $item->file_size_human }}
                                @endif
                            </small>
                            <div class="d-flex gap-2">
                                <small class="text-muted">
                                    <i class="fas fa-eye"></i> {{ $item->view_count }}
                                </small>
                                <small class="text-muted">
                                    <i class="fas fa-download"></i> {{ $item->download_count }}
                                </small>
                            </div>
                        </div>
                        <div class="d-flex gap-2">
                            @if(is_string($item->type) && ($item->type === 'audio' || $item->type === 'video'))
                                <button wire:click="playMedia({{ $item->id }})" class="btn btn-primary btn-sm">
                                    <i class="fas fa-play me-1"></i> Play
                                </button>
                            @endif
                            <button wire:click="downloadMedia({{ $item->id }})" class="btn btn-outline-primary btn-sm">
                                <i class="fas fa-download me-1"></i> Download
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            @empty
            <div class="col-12">
                <div class="text-center py-5">
                    <i class="fas fa-music text-muted" style="font-size: 4rem;"></i>
                    <h4 class="mt-3">No media found</h4>
                    <p class="text-muted">Try adjusting your search or filters</p>
                </div>
            </div>
            @endforelse
            @else
            <div class="col-12">
                <div class="text-center py-5">
                    <i class="fas fa-exclamation-triangle text-warning" style="font-size: 4rem;"></i>
                    <h4 class="mt-3">Error loading media</h4>
                    <p class="text-muted">Unable to load media items. Please try refreshing the page.</p>
                </div>
            </div>
            @endif
        </div>

        <!-- Pagination -->
        @if($media && method_exists($media, 'links'))
        <div class="d-flex justify-content-center mt-5">
            {{ $media->links() }}
        </div>
        @endif
    </div>

    <!-- Media Player Modal -->
    @if($showPlayer && $selectedMedia)
    <div class="modal fade show" style="display: block;" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">{{ $selectedMedia->title }}</h5>
                    <button type="button" wire:click="closePlayer" class="btn-close"></button>
                </div>
                <div class="modal-body">
                    <p class="text-muted mb-3">{{ $selectedMedia->description }}</p>
                    
                    @if(is_string($selectedMedia->type) && $selectedMedia->type === 'audio')
                        <div class="audio-player">
                            <audio controls class="w-100">
                                <source src="{{ $selectedMedia->file_url }}" type="{{ $selectedMedia->mime_type }}">
                                Your browser does not support the audio element.
                            </audio>
                        </div>
                    @elseif(is_string($selectedMedia->type) && $selectedMedia->type === 'video')
                        <div class="video-player">
                            <video controls class="w-100">
                                <source src="{{ $selectedMedia->file_url }}" type="{{ $selectedMedia->mime_type }}">
                                Your browser does not support the video element.
                            </video>
                        </div>
                    @else
                        <div class="text-center py-4">
                            <i class="fas fa-file-alt text-muted" style="font-size: 4rem;"></i>
                            <p class="mt-3">This is a document file. Please download to view.</p>
                            <button wire:click="downloadMedia({{ $selectedMedia->id }})" class="btn btn-primary">
                                <i class="fas fa-download me-2"></i>Download File
                            </button>
                        </div>
                    @endif
                    
                    <div class="mt-3">
                        <small class="text-muted">
                            Duration: {{ $selectedMedia->duration_human ?? 'N/A' }} | 
                            Size: {{ $selectedMedia->file_size_human }} | 
                            Views: {{ $selectedMedia->view_count }} | 
                            Downloads: {{ $selectedMedia->download_count }}
                        </small>
                    </div>
                </div>
                <div class="modal-footer">
                    <button wire:click="downloadMedia({{ $selectedMedia->id }})" class="btn btn-outline-primary">
                        <i class="fas fa-download me-2"></i>Download
                    </button>
                    <button wire:click="closePlayer" class="btn btn-secondary">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-backdrop fade show"></div>
    @endif

    <style>
        .media-card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            transition: all 0.3s ease;
            border: 1px solid #e9ecef;
        }
        
        .media-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0,0,0,0.15);
        }
        
        .media-card.featured {
            border: 2px solid var(--accent-color);
            background: linear-gradient(135deg, #fff, #f8f9fa);
        }
        
        .audio-player, .video-player {
            background: #f8f9fa;
            border-radius: 10px;
            padding: 20px;
        }
        
        .modal.show {
            background-color: rgba(0,0,0,0.5);
        }
        
        .btn-group .btn {
            border-radius: 20px;
        }
        
        .badge {
            border-radius: 15px;
        }
    </style>
</div>
