<div>
    <div class="mb-2">
        <input type="text" class="form-control w-25 " wire:model.live='search'>
    </div>
    <div class="table-responsive text-nowrap">
        @if (count($projects) > 0)
        <table class="table">
            <thead>
                <tr>
                    <th class="text-center" widt="40%">Name</th>
                    <th class="text-center" widt="20%">Category</th>
                    <th class="text-center" widt="20%">Image</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @foreach ($projects as $project)
                <tr wire:key="{{ $project->id }}">
                    <td class="text-center"><strong>{{ $project->name }}</strong></td>
                    <td class="text-center">{{ $project->category->name }}</td>
                    <td class="text-center"><img src="{{ Storage::url($project->path) }}" class="rounded" width="50px" height="50px"
                            alt=""></td>
                    <td>
                        <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#" wire:click.prevent="$dispatch('updateProjects',{id :{{ $project->id }}})"
                                ><i class="bx bx-edit-alt me-1"></i> Edit</a
                              >
                                <a class="dropdown-item" href="#"
                                    wire:click.prevent="$dispatch('deleteProjects',{id :{{ $project->id }}})"><i
                                        class="bx bx-trash me-1"></i> Delete</a>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="mt-4">
            {{ $projects->links() }}
        </div>
        @else
        <span class="tex-danger">There Is No Datat To show</span>
        @endif

    </div>
</div>
