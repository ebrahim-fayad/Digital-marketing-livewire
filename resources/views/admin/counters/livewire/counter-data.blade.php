<div>
    <div class="mb-2">
        <input type="text" class="form-control w-25 " wire:model.live='search'>
    </div>
    <div class="table-responsive text-nowrap">
        @if (count($counters) >0)
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Progress</th>
                    <th>Icons</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @foreach ($counters as $counter)

                <tr wire:key="{{ $counter->id }}">
                    <td width="30%"><strong>{{ $counter->name }}</strong></td>

                    <td width="30%"><span class="badge bg-label-primary me-1">{{ $counter->count }}</span></td>
                    <td width="30%"><i class="{{ $counter->icon }}"></i> </td>
                                            <td>
                          <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="#" wire:click.prevent="$dispatch('updateCounters',{id :{{ $counter->id }}})"
                                ><i class="bx bx-edit-alt me-1"></i> Edit</a
                              >
                              <a class="dropdown-item" href="#" wire:click.prevent="$dispatch('deleteCounters',{id :{{ $counter->id }}})"
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
                {{ $counters->links() }}
            </div>
        @else
        <span class="tex-danger">There Is No Datat To show</span>
        @endif

    </div>
</div>

