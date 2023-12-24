<?php

namespace App\Livewire\Admin\Messages\Livewire;

use App\Models\Message;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class MessagesData extends Component
{
    use WithPagination;
    #[Url(except:'',as:"S")]
    public $search='';
    protected $listeners=['refreshData'=>'$refresh'];
    public function updatingSearch()
    {
        $this->resetPage();
    }
    public function render()
    {
        return view('admin.messages.livewire.messages-data',[
            'messages'=>Message::where('name','like',"%$this->search%")->latest()->paginate('6')
        ]);
    }
}
