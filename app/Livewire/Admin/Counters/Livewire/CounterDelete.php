<?php

namespace App\Livewire\Admin\Counters\Livewire;

use App\Models\Counter;
use Livewire\Component;

class CounterDelete extends Component
{
    public $counter,$name;
    protected $listeners = ['deleteCounters'];
    public function deleteCounters($id)
    {
        $this->counter = Counter::findOrFail($id);
        $this->name= $this->counter->name;
        $this->dispatch('deleteModalToggle');
    }
    public function submit()
    {
        $this->counter->delete();
        $this->reset('counter');
        $this->dispatch('deleteModalToggle');
        $this->dispatch('refreshData')->to(CounterData::class);
    }
    public function render()
    {
        return view('admin.counters.livewire.counter-delete');
    }
}
