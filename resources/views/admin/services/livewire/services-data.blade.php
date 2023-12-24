<div>
    <div class="mb-2">
        <input type="text" class="form-control w-25 " wire:model.live='search'>
    </div>
    <div class="table-responsive text-nowrap">

        <table class="table">
            <thead>
                <tr>
                    <th class="text-center" width="30%">Name</th>
                    <th class="text-center" width="30%">Description</th>
                    <th class="text-center" width="30%">Icons</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @if (count($services) >0)

                @foreach ($services as $service)

                <tr wire:key="{{ $service->id }}">
                    <td  lass="text-center"><strong>{{ $service->name }}</strong></td>

                    <td lass="text-center"><span class="badge bg-label-primary me-1">{{ $service->description }}</span></td>
                    <td lass="text-center"><i class="{{ $service->icon }}"></i> </td>
                                            <td>
                          <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="#" wire:click.prevent="$dispatch('updateServices',{id :{{ $service->id }}})"
                                ><i class="bx bx-edit-alt me-1"></i> Edit</a
                              >
                              <a class="dropdown-item" href="#" wire:click.prevent="$dispatch('deleteServices',{id :{{ $service->id }}})"
                                ><i class="bx bx-trash me-1"></i> Delete</a
                              >
                            </div>
                          </div>
                        </td>
                </tr>
                @endforeach
            </tbody>
        </table>
            <div class="mt-4">
                {{ $services->links() }}
            </div>
        @else
        <span class="tex-danger">There Is No Datat To show</span>
        @endif

    </div>
</div>

