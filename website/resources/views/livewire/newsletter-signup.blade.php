<div>
    <form wire:submit.prevent="signup">
        <div class="row g-2">
            <div class="col-md-6">
                <input type="text" wire:model="firstName" class="form-control form-control-sm" placeholder="First Name" required>
                @error('firstName') <span class="text-danger small">{{ $message }}</span> @enderror
            </div>
            <div class="col-md-6">
                <input type="text" wire:model="lastName" class="form-control form-control-sm" placeholder="Last Name" required>
                @error('lastName') <span class="text-danger small">{{ $message }}</span> @enderror
            </div>
            <div class="col-12">
                <input type="email" wire:model="email" class="form-control form-control-sm" placeholder="Email Address" required>
                @error('email') <span class="text-danger small">{{ $message }}</span> @enderror
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-light btn-sm w-100">
                    <i class="fas fa-envelope me-1"></i>Subscribe
                </button>
            </div>
        </div>
    </form>
    
    @if(session()->has('message'))
        <div class="alert alert-success alert-sm mt-2">
            {{ session('message') }}
        </div>
    @endif
</div>
