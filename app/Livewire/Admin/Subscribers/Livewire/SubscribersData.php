<?php

namespace App\Livewire\Admin\Subscribers\Livewire;

use App\Models\Subscribers;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class SubscribersData extends Component
{
    #[Url(except: '', as: "S")]
    public $search = '';
    use WithPagination;
    protected $listeners = ['refreshData' => '$refresh'];
    public function updatingSearch()
    {
        $this->resetPage();
    }
    public function render()
    {
        return view('admin.subscribers.livewire.subscribers-data', [
            'subscribers' => Subscribers::where('email', 'like', "%$this->search%")->latest()->paginate('6'),
        ]);
    }
}
