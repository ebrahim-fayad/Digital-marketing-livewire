<form class="mb-3" wire:submit.prevent='submit'>

    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="text" wire:model='email' class="form-control" placeholder="Enter your email or username"
            autofocus />
        @error('email')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="mb-3 form-password-toggle">
        <div class="d-flex justify-content-between">
            <label class="form-label" for="password">Password</label>
        </div>
        <div class="input-group input-group-merge">
            <input type="password" wire:model='password' class="form-control" aria-describedby="password" />
        </div>
        @error('password')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="mb-3">
        <div class="form-check">
            <input class="form-check-input" wire:model='remember' type="checkbox" />
            <label class="form-check-label" for="remember-me"> Remember Me </label>
        </div>
    </div>
    <div class="mb-3">
        <button class="btn btn-primary d-grid w-100" type="submit" wire:loading wire:target='submit'>
            <span wire:loading.remove>Sign in</span>
            <div class="text-center" wire:loading>
                <div class="spinner-border spinner-border-sm text-danger" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
            </div>
        </button>
    </div>
</form>
