<?php

namespace App\Livewire\Admin\Counters\Livewire;

use App\Models\Counter;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class CounterData extends Component
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
        return view('admin.counters.livewire.counter-data', [
            'counters' => Counter::where('name', 'like', "%$this->search%")->latest()->paginate('10'),
        ]);
    }
}
