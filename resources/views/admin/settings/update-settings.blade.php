            <form class="row p-3" wire:submit.prevent='submit'>
                @if (session('success'))
                <div class="p-5 text-center my-success-alert">

                    <div class="alert alert-primary">{{ session('success') }}</div>
                </div>
                @endif
                <div class="col-md-6">
                        <div class="card-body">
                            <div>
                                <label class="form-label mb-3">Name</label>
                                <input type="text" class="form-control" wire:model='setting.name'/>
                            </div>
                            @error('setting.name')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                    </div>
                </div>
                <div class="col-md-6">

                        <div class="card-body">
                            <div>
                                <label class="form-label mb-3 capitalize">address</label>
                                <input type="text" class="form-control" wire:model='setting.address'/>
                            </div>


                    </div>
                </div>
                <div class="col-md-6">

                        <div class="card-body">
                            <div>
                                <label class="form-label mb-3 capitalize">email</label>
                                <input type="email" class="form-control" wire:model='setting.email'/>
                            </div>


                    </div>
                </div>
                <div class="col-md-6">

                        <div class="card-body">
                            <div>
                                <label class="form-label mb-3 capitalize">phone</label>
                                <input type="text" class="form-control" wire:model='setting.phone'/>
                            </div>


                    </div>
                </div>
                <div class="col-md-6">

                        <div class="card-body">
                            <div>
                                <label class="form-label mb-3 capitalize">facebook</label>
                                <input type="text" class="form-control" wire:model='setting.facebook'/>
                            </div>


                    </div>
                </div>
                <div class="col-md-6">

                        <div class="card-body">
                            <div>
                                <label class="form-label mb-3 capitalize">twitter</label>
                                <input type="text" class="form-control" wire:model='setting.twitter'/>
                            </div>


                    </div>
                </div>
                <div class="col-md-6">

                        <div class="card-body">
                            <div>
                                <label class="form-label mb-3">linkedin</label>
                                <input type="text" class="form-control"wire:model='setting.linkedin' />
                            </div>


                    </div>
                </div>
                <div class="col-md-6">

                        <div class="card-body">
                            <div>
                                <label class="form-label mb-3 capitalize">instagram</label>
                                <input type="text" class="form-control" wire:model='setting.instagram'/>
                            </div>


                    </div>
                </div>
                <div class="col-md-12">

                        <div class="card-body">
                            <div>
                                 <button class="btn btn-primary text-center" type="submit"  wire:target='submit' >
            <span wire:loading.remove.attr='disabled' >Submit</span>
            <div class="text-center" wire:loading>
                <div class="spinner-border spinner-border-sm text-danger" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
        </button>
                            </div>

                        </div>

                </div>

            </form>
