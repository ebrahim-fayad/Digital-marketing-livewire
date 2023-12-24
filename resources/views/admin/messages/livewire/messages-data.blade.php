<div>
    <div class="mb-2">
        <input type="text" class="form-control w-25 " wire:model.live='search'>
    </div>
    <div class="table-responsive text-nowrap">
        @if (count($messages) > 0)
            <table class="table">
                <thead>
                    <tr>
                        <th class="text-center" widt="30%">Name</th>
                        <th class="text-center" widt="30%">Email</th>
                        <th class="text-center" widt="20%">Subject</th>
                        <th class="text-center" widt="10%">Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($messages as $message)
                        <tr wire:key="{{ $message->id }}">
                            <td class="text-center"><strong>{{ $message->name }}</strong></td>
                            <td class="text-center">{{ $message->email }}</td>
                            <td class="text-center">{{ $message->subject }}</td>
                            <td class="text-center" >
                                @if ($message->status == 0)
                                <i class="fa-solid fa-eye-slash fa-2x fa-fade"></i>
                                @else
                                <i class="fa-regular fa-eye fa-bounce fa-2x"></i>
                                @endif
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#"
                                            wire:click.prevent="$dispatch('showMessages',{id :{{ $message->id }}})"><i
                                                class="fa fa-eye me-1"></i> Show</a>
                                        <a class="dropdown-item" href="#"
                                            wire:click.prevent="$dispatch('deleteMessages',{id :{{ $message->id }}})"><i
                                                class="bx bx-trash me-1"></i> Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="mt-4">
                {{ $messages->links() }}
            </div>
        @else
            <span class="tex-danger">There Is No Datat To show</span>
        @endif

    </div>
</div>
