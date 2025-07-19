<div class="min-h-screen bg-gradient-to-br from-blue-50 via-white to-purple-50 flex items-center justify-center p-4">
    <div class="w-full max-w-md">
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <div class="p-6 text-center">
                <div class="flex items-center justify-center mb-4">
                    <svg class="h-8 w-8 text-purple-600 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M12 21C12 21 4 13.5 4 8.5C4 5.42 6.42 3 9.5 3C11.24 3 12.91 3.81 14 5.08C15.09 3.81 16.76 3 18.5 3C21.58 3 24 5.42 24 8.5C24 13.5 16 21 16 21H12Z" /></svg>
                    <span class="text-2xl font-bold text-gray-900">Salina Shelton</span>
                </div>
                <h2 class="text-2xl font-semibold mb-1">Welcome Back</h2>
                <p class="text-gray-500 mb-4">
                    {{ $isLogin ? 'Sign in to your account' : 'Create a new account' }}
                </p>
                <div class="flex justify-center mb-4">
                    <button type="button" class="w-1/2 py-2 px-4 rounded-l-lg focus:outline-none {{ $isLogin ? 'bg-purple-600 text-white' : 'bg-gray-100 text-gray-700' }}" wire:click="toggleMode('login')">Login</button>
                    <button type="button" class="w-1/2 py-2 px-4 rounded-r-lg focus:outline-none {{ !$isLogin ? 'bg-purple-600 text-white' : 'bg-gray-100 text-gray-700' }}" wire:click="toggleMode('register')">Register</button>
                </div>
                @if ($isLogin)
                    <form wire:submit.prevent="login" class="space-y-4">
                        <div class="space-y-2 text-left">
                            <label for="email" class="block text-sm font-medium">Email</label>
                            <input id="email" name="email" type="email" class="w-full border rounded px-3 py-2" placeholder="Enter your email" wire:model.defer="formData.email" required />
                            @error('formData.email') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                        </div>
                        <div class="space-y-2 text-left">
                            <label for="password" class="block text-sm font-medium">Password</label>
                            <div class="relative">
                                <input id="password" name="password" type="{{ $showPassword ? 'text' : 'password' }}" class="w-full border rounded px-3 py-2" placeholder="Enter your password" wire:model.defer="formData.password" required />
                                <button type="button" class="absolute right-2 top-2 text-gray-400" wire:click="$toggle('showPassword')">
                                    <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                        <path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-1.274 4.057-5.065 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                    </svg>
                                </button>
                            </div>
                            @error('formData.password') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                        </div>
                        <button type="submit" class="w-full bg-purple-600 text-white py-2 rounded hover:bg-purple-700" wire:loading.attr="disabled">
                            {{ $loading ? 'Signing in...' : 'Sign In' }}
                        </button>
                    </form>
                @else
                    <form wire:submit.prevent="register" class="space-y-4">
                        <div class="space-y-2 text-left">
                            <label for="name" class="block text-sm font-medium">Full Name</label>
                            <input id="name" name="name" type="text" class="w-full border rounded px-3 py-2" placeholder="Enter your full name" wire:model.defer="formData.name" required />
                            @error('formData.name') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                        </div>
                        <div class="space-y-2 text-left">
                            <label for="reg-email" class="block text-sm font-medium">Email</label>
                            <input id="reg-email" name="email" type="email" class="w-full border rounded px-3 py-2" placeholder="Enter your email" wire:model.defer="formData.email" required />
                            @error('formData.email') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                        </div>
                        <div class="space-y-2 text-left">
                            <label for="reg-password" class="block text-sm font-medium">Password</label>
                            <div class="relative">
                                <input id="reg-password" name="password" type="{{ $showPassword ? 'text' : 'password' }}" class="w-full border rounded px-3 py-2" placeholder="Create a password" wire:model.defer="formData.password" required />
                                <button type="button" class="absolute right-2 top-2 text-gray-400" wire:click="$toggle('showPassword')">
                                    <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                        <path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-1.274 4.057-5.065 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                    </svg>
                                </button>
                            </div>
                            @error('formData.password') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                        </div>
                        <div class="space-y-2 text-left">
                            <label for="confirm-password" class="block text-sm font-medium">Confirm Password</label>
                            <div class="relative">
                                <input id="confirm-password" name="confirmPassword" type="{{ $showConfirmPassword ? 'text' : 'password' }}" class="w-full border rounded px-3 py-2" placeholder="Confirm your password" wire:model.defer="formData.confirmPassword" required />
                                <button type="button" class="absolute right-2 top-2 text-gray-400" wire:click="$toggle('showConfirmPassword')">
                                    <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                        <path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-1.274 4.057-5.065 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                    </svg>
                                </button>
                            </div>
                            @error('formData.confirmPassword') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                        </div>
                        <button type="submit" class="w-full bg-purple-600 text-white py-2 rounded hover:bg-purple-700" wire:loading.attr="disabled">
                            {{ $loading ? 'Registering...' : 'Register' }}
                        </button>
                    </form>
                @endif
            </div>
        </div>
    </div>
</div>
