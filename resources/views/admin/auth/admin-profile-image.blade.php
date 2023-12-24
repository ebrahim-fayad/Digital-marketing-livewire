<form class="mb-3" wire:submit.prevent='uploadImage'>

    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="file" wire:model='photo' class="form-control" autofocus />
        @error('photo')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    @if ($photo)
    <div class=" text-center">
         <img src="{{ $photo->temporaryUrl() }}" class="w-100 h-100 mb-3">
    </div>
    @endif
    <div class="mb-3">
        <button class="btn btn-primary d-grid w-100" type="submit" wire:loading wire:target='uploadImage' >
            <span wire:loading.remove.attr='disabled'>Upload Image</span>
            <div class="text-center" wire:loading>
                <div class="spinner-border spinner-border-sm text-danger" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
            </div>
        </button>
    </div>
</form>
