<button type="submit" class="btn btn-primary">

                        <span wire:loading.remove wire:target='submit'>{{ $btnName }}</span>
                        <div class="text-center" wire:loading wire:target='submit'>
                            <div class="spinner-border spinner-border-sm text-danger" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                        </div>
                    </button>
