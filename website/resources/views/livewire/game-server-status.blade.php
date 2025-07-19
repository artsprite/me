<div>
    <div class="container py-5">
        <!-- Header -->
        <div class="text-center mb-5">
            <h1 class="display-4 fw-bold">Game Server Status</h1>
            <p class="lead text-muted">Safe and therapeutic gaming environments for relaxation and creativity</p>
        </div>

        @if(session()->has('message'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('message') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        <!-- Statistics Cards -->
        <div class="row g-4 mb-5">
            <div class="col-md-2 col-sm-4 col-6">
                <div class="card text-center">
                    <div class="card-body">
                        <i class="fas fa-server text-primary" style="font-size: 2rem;"></i>
                        <h4 class="mt-2">{{ $stats['total'] }}</h4>
                        <small class="text-muted">Total Servers</small>
                    </div>
                </div>
            </div>
            <div class="col-md-2 col-sm-4 col-6">
                <div class="card text-center">
                    <div class="card-body">
                        <i class="fas fa-circle text-success" style="font-size: 2rem;"></i>
                        <h4 class="mt-2">{{ $stats['online'] }}</h4>
                        <small class="text-muted">Online</small>
                    </div>
                </div>
            </div>
            <div class="col-md-2 col-sm-4 col-6">
                <div class="card text-center">
                    <div class="card-body">
                        <i class="fas fa-circle text-danger" style="font-size: 2rem;"></i>
                        <h4 class="mt-2">{{ $stats['offline'] }}</h4>
                        <small class="text-muted">Offline</small>
                    </div>
                </div>
            </div>
            <div class="col-md-2 col-sm-4 col-6">
                <div class="card text-center">
                    <div class="card-body">
                        <i class="fas fa-circle text-warning" style="font-size: 2rem;"></i>
                        <h4 class="mt-2">{{ $stats['maintenance'] }}</h4>
                        <small class="text-muted">Maintenance</small>
                    </div>
                </div>
            </div>
            <div class="col-md-2 col-sm-4 col-6">
                <div class="card text-center">
                    <div class="card-body">
                        <i class="fas fa-users text-info" style="font-size: 2rem;"></i>
                        <h4 class="mt-2">{{ $stats['total_players'] }}</h4>
                        <small class="text-muted">Total Players</small>
                    </div>
                </div>
            </div>
            <div class="col-md-2 col-sm-4 col-6">
                <div class="card text-center">
                    <div class="card-body">
                        <i class="fas fa-sync-alt text-secondary" style="font-size: 2rem;"></i>
                        <h4 class="mt-2">Auto</h4>
                        <small class="text-muted">Refresh</small>
                    </div>
                </div>
            </div>
        </div>

        <!-- Filters -->
        <div class="card mb-4">
            <div class="card-body">
                <div class="row g-3">
                    <div class="col-md-6">
                        <input wire:model.live.debounce.300ms="search" type="text" class="form-control" placeholder="Search servers...">
                    </div>
                    <div class="col-md-4">
                        <select wire:model.live="filter" class="form-select">
                            <option value="all">All Servers</option>
                            <option value="online">Online Only</option>
                            <option value="offline">Offline Only</option>
                            <option value="maintenance">Maintenance</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <button wire:click="refreshServers" class="btn btn-primary w-100">
                            <i class="fas fa-sync-alt"></i> Refresh
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Server Grid -->
        <div class="row g-4">
            @forelse($servers as $server)
            <div class="col-lg-6 col-md-6">
                <div class="server-card {{ $server->status }}">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <div class="flex-grow-1">
                                <div class="d-flex align-items-center mb-2">
                                    @if($server->is_featured)
                                        <span class="badge bg-warning me-2">Featured</span>
                                    @endif
                                    <h5 class="mb-0">{{ $server->name }}</h5>
                                </div>
                                <p class="text-muted mb-2">{{ $server->description }}</p>
                                <div class="d-flex align-items-center mb-2">
                                    <span class="me-2">{{ $server->status_emoji }}</span>
                                    <span class="badge bg-light text-dark">{{ ucfirst($server->status) }}</span>
                                    <span class="badge bg-secondary ms-2">{{ ucfirst($server->game_type) }}</span>
                                    @if($server->server_type)
                                        <span class="badge bg-info ms-2">{{ ucfirst($server->server_type) }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="text-end">
                                <div class="mb-1">
                                    <small class="text-muted">{{ $server->current_players }}/{{ $server->max_players }} players</small>
                                </div>
                                <div class="progress mb-2" style="width: 80px; height: 8px;">
                                    <div class="progress-bar" style="width: {{ $server->player_percentage }}%"></div>
                                </div>
                                @if($server->version)
                                    <small class="text-muted">{{ $server->version }}</small>
                                @endif
                            </div>
                        </div>
                        
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="server-info">
                                <small class="text-muted">
                                    <i class="fas fa-clock me-1"></i>
                                    Last updated: {{ $server->last_check ? $server->last_check->diffForHumans() : 'Unknown' }}
                                </small>
                            </div>
                            <div class="server-actions">
                                @if($server->status === 'online')
                                    <button class="btn btn-success btn-sm">
                                        <i class="fas fa-play me-1"></i> Join
                                    </button>
                                @elseif($server->status === 'maintenance')
                                    <button class="btn btn-warning btn-sm" disabled>
                                        <i class="fas fa-tools me-1"></i> Maintenance
                                    </button>
                                @else
                                    <button class="btn btn-secondary btn-sm" disabled>
                                        <i class="fas fa-times me-1"></i> Offline
                                    </button>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-12">
                <div class="text-center py-5">
                    <i class="fas fa-gamepad text-muted" style="font-size: 4rem;"></i>
                    <h4 class="mt-3">No servers found</h4>
                    <p class="text-muted">Try adjusting your search or filters</p>
                </div>
            </div>
            @endforelse
        </div>

        <!-- Server Information -->
        <div class="row mt-5">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0">
                            <i class="fas fa-info-circle me-2"></i>
                            About Our Servers
                        </h5>
                    </div>
                    <div class="card-body">
                        <p>Our game servers are designed to provide safe, therapeutic gaming environments for relaxation and creative expression.</p>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-check text-success me-2"></i>Child-friendly content only</li>
                            <li><i class="fas fa-check text-success me-2"></i>Moderated environments</li>
                            <li><i class="fas fa-check text-success me-2"></i>Creative and therapeutic focus</li>
                            <li><i class="fas fa-check text-success me-2"></i>24/7 monitoring</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-success text-white">
                        <h5 class="mb-0">
                            <i class="fas fa-shield-alt me-2"></i>
                            Safety Features
                        </h5>
                    </div>
                    <div class="card-body">
                        <p>We prioritize the safety and well-being of all players in our gaming environments.</p>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-shield-alt text-primary me-2"></i>Content filtering</li>
                            <li><i class="fas fa-user-shield text-primary me-2"></i>Active moderation</li>
                            <li><i class="fas fa-ban text-primary me-2"></i>Zero tolerance for inappropriate behavior</li>
                            <li><i class="fas fa-clock text-primary me-2"></i>Time limits and breaks</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .server-card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            transition: all 0.3s ease;
            border: 2px solid transparent;
        }
        
        .server-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0,0,0,0.15);
        }
        
        .server-card.online {
            border-color: var(--success-color);
            background: linear-gradient(135deg, #fff, #f0fff4);
        }
        
        .server-card.offline {
            border-color: var(--danger-color);
            background: linear-gradient(135deg, #fff, #fff5f5);
        }
        
        .server-card.maintenance {
            border-color: var(--warning-color);
            background: linear-gradient(135deg, #fff, #fffbeb);
        }
        
        .progress {
            border-radius: 10px;
        }
        
        .progress-bar {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
        }
        
        .badge {
            border-radius: 15px;
        }
        
        .server-info small {
            font-size: 0.8rem;
        }
    </style>
</div>
