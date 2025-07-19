<div>
    <!-- Header Section -->
    <section class="py-5" style="background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));">
        <div class="container">
            <div class="text-center">
                <h1 class="display-4 fw-bold text-white mb-3">File Library</h1>
                <p class="lead text-white-50">Upload, organize, and share your wellness resources and art therapy materials</p>
            </div>
        </div>
    </section>

    <!-- Upload Section -->
    @auth
    <section class="py-4">
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title mb-3">
                        <i class="fas fa-cloud-upload-alt me-2"></i>Upload Files
                    </h5>
                    
                    @if(session()->has('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    
                    @if(session()->has('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif
                    
                    <form wire:submit.prevent="uploadFiles">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label">Select Files</label>
                                <input type="file" wire:model="uploadedFiles" class="form-control" multiple>
                                @error('uploadedFiles.*') <span class="text-danger small">{{ $message }}</span> @enderror
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Description (Optional)</label>
                                <input type="text" wire:model="description" class="form-control" placeholder="Brief description of the files">
                                @error('description') <span class="text-danger small">{{ $message }}</span> @enderror
                            </div>
                            <div class="col-md-2">
                                <label class="form-label">Visibility</label>
                                <div class="form-check">
                                    <input type="checkbox" wire:model="isPublic" class="form-check-input" id="isPublic">
                                    <label class="form-check-label" for="isPublic">Public</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-upload me-2"></i>Upload Files
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    @endauth

    <!-- Search and Filters -->
    <section class="py-3">
        <div class="container">
            <div class="row g-3 align-items-center">
                <div class="col-md-4">
                    <div class="input-group">
                        <span class="input-group-text">
                            <i class="fas fa-search"></i>
                        </span>
                        <input type="text" wire:model.live="search" class="form-control" placeholder="Search files...">
                    </div>
                </div>
                <div class="col-md-3">
                    <select wire:model.live="filter" class="form-select">
                        <option value="all">All Files</option>
                        <option value="public">Public Only</option>
                        <option value="private">Private Only</option>
                        @auth
                        <option value="mine">My Files</option>
                        @endauth
                    </select>
                </div>
                <div class="col-md-3">
                    <select wire:model.live="sortBy" class="form-select">
                        <option value="created_at">Date Uploaded</option>
                        <option value="file_name">File Name</option>
                        <option value="file_size">File Size</option>
                        <option value="download_count">Downloads</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <select wire:model.live="sortOrder" class="form-select">
                        <option value="desc">Descending</option>
                        <option value="asc">Ascending</option>
                    </select>
                </div>
            </div>
        </div>
    </section>

    <!-- Files List -->
    <section class="py-4">
        <div class="container">
            @if($files->count() > 0)
                <div class="row g-4">
                    @foreach($files as $file)
                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100">
                            <div class="card-body">
                                <div class="d-flex align-items-start justify-content-between mb-3">
                                    <div class="flex-grow-1">
                                        <div class="d-flex align-items-center mb-2">
                                            @if(Str::startsWith($file->mime_type, 'image/'))
                                                <i class="fas fa-image me-2" style="color: var(--primary-color);"></i>
                                            @elseif(Str::startsWith($file->mime_type, 'video/'))
                                                <i class="fas fa-video me-2" style="color: var(--secondary-color);"></i>
                                            @elseif(Str::startsWith($file->mime_type, 'audio/'))
                                                <i class="fas fa-music me-2" style="color: var(--accent-color);"></i>
                                            @elseif(Str::contains($file->mime_type, 'pdf'))
                                                <i class="fas fa-file-pdf me-2" style="color: #dc3545;"></i>
                                            @elseif(Str::contains($file->mime_type, 'word'))
                                                <i class="fas fa-file-word me-2" style="color: #0d6efd;"></i>
                                            @else
                                                <i class="fas fa-file me-2" style="color: var(--text-color);"></i>
                                            @endif
                                            <span class="badge {{ $file->is_public ? 'bg-success' : 'bg-warning' }}">
                                                {{ $file->is_public ? 'Public' : 'Private' }}
                                            </span>
                                        </div>
                                        <h6 class="card-title mb-1">{{ Str::limit($file->file_name, 30) }}</h6>
                                        @if($file->description)
                                            <p class="card-text small text-muted mb-2">{{ Str::limit($file->description, 60) }}</p>
                                        @endif
                                    </div>
                                </div>
                                
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <small class="text-muted">
                                        <i class="fas fa-user me-1"></i>{{ $file->user ? $file->user->name : 'Unknown User' }}
                                    </small>
                                    <small class="text-muted">
                                        <i class="fas fa-download me-1"></i>{{ $file->download_count }}
                                    </small>
                                </div>
                                
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <small class="text-muted">{{ $file->file_size_human }}</small>
                                    <small class="text-muted">{{ $file->created_at->diffForHumans() }}</small>
                                </div>
                                
                                <div class="d-flex gap-2">
                                    <a href="{{ route('file.download', $file->id) }}" class="btn btn-sm btn-primary flex-fill">
                                        <i class="fas fa-download me-1"></i>Download
                                    </a>
                                    
                                    @auth
                                        @if(auth()->id() === $file->user_id || auth()->user()->isAdmin())
                                            <button wire:click="togglePublic({{ $file->id }})" class="btn btn-sm btn-outline-secondary">
                                                <i class="fas fa-eye{{ $file->is_public ? '-slash' : '' }}"></i>
                                            </button>
                                            <button wire:click="deleteFile({{ $file->id }})" class="btn btn-sm btn-outline-danger" 
                                                    onclick="return confirm('Are you sure you want to delete this file?')">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        @endif
                                    @endauth
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                
                <div class="text-center mt-4">
                    <p class="text-muted">Showing {{ $files->count() }} file(s)</p>
                </div>
            @else
                <div class="text-center py-5">
                    <i class="fas fa-folder-open" style="font-size: 4rem; color: var(--text-color); opacity: 0.3;"></i>
                    <h4 class="mt-3">No files found</h4>
                    <p class="text-muted">
                        @if($search || $filter !== 'all')
                            Try adjusting your search or filter criteria.
                        @else
                            @auth
                                Start by uploading your first file above.
                            @else
                                <a href="{{ route('login') }}" class="text-decoration-none">Login</a> to upload and manage files.
                            @endauth
                        @endif
                    </p>
                </div>
            @endif
        </div>
    </section>

    <!-- File Types Info -->
    <section class="py-4" style="background-color: #f8f9fa;">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-3">
                    <div class="text-center">
                        <i class="fas fa-image" style="font-size: 2rem; color: var(--primary-color);"></i>
                        <h6 class="mt-2">Images</h6>
                        <small class="text-muted">JPG, PNG, GIF, SVG</small>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="text-center">
                        <i class="fas fa-video" style="font-size: 2rem; color: var(--secondary-color);"></i>
                        <h6 class="mt-2">Videos</h6>
                        <small class="text-muted">MP4, AVI, MOV, WebM</small>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="text-center">
                        <i class="fas fa-music" style="font-size: 2rem; color: var(--accent-color);"></i>
                        <h6 class="mt-2">Audio</h6>
                        <small class="text-muted">MP3, WAV, OGG, M4A</small>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="text-center">
                        <i class="fas fa-file" style="font-size: 2rem; color: var(--text-color);"></i>
                        <h6 class="mt-2">Documents</h6>
                        <small class="text-muted">PDF, DOC, TXT, ZIP</small>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
