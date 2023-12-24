<div>
    <div class="mb-2">
        <input type="text" class="form-control w-25 " wire:model.live='search'>
    </div>
    <div class="table-responsive text-nowrap">
        @if (count($categories) > 0)
            <table class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($categories as $category)
                        <tr wire:key="{{ $category->id }}">
                            <td width="50%">
                                <strong>{{ $category->name }}</strong>
                            </td>
                            <td>
                                <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="#"
                                  wire:click.prevent="$dispatch('updateCategories',{id :{{ $category->id }}})"><i
                                      class="bx bx-edit-alt me-1"></i> edit</a>
                                      <a class="dropdown-item" href="#"
                                          wire:click.prevent="$dispatch('deleteCategories',{id :{{ $category->id }}})"><i
                                              class="bx bx-trash me-1"></i> Delete</a>
                            </div>
                          </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="mt-4">
                {{ $categories->links() }}
            </div>
        @else
            <span class="tex-danger">There Is No Datat To show</span>
        @endif

    </div>
</div>
