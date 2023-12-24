<div>
    <div class="mb-2">
        <input type="text" class="form-control w-25 " wire:model.live='search'>
    </div>
    <div class="table-responsive text-nowrap">
        @if (count($subscribers) > 0)
            <table class="table">
                <thead>
                    <tr>
                        <th>Email</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($subscribers as $subscriber)
                        <tr wire:key="{{ $subscriber->id }}">
                            <td width="50%"><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                <strong>{{ $subscriber->email }}</strong>
                            </td>
                            <td>
                                <a class="btn btn-danger" href="#"
                                    wire:click.prevent="$dispatch('deleteSubscribers',{id :{{ $subscriber->id }}})"><i
                                        class="bx bx-trash me-1"></i> Delete</a>
                             </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="mt-4">
                {{ $subscribers->links() }}
            </div>
        @else
            <span class="tex-danger">There Is No Datat To show</span>
        @endif

    </div>
</div>
