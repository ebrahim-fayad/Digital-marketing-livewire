<?php

namespace App\Livewire\Admin\Counters\Livewire;

use App\Models\Counter;
use Livewire\Component;

class CounterUpdate extends Component
{
    public $counter,$name,$count,$icon;
    public function rules()
    {
        return [
            'name' => 'required',
            'count' => 'required|numeric',
            'icon' => 'required',
        ];
    }
    protected $listeners = ['updateCounters'];
    public function updateCounters($id)
    {
        $this->counter = Counter::findOrFail($id);
        $this->name = $this->counter->name;
        $this->count = $this->counter->count;
        $this->icon = $this->counter->icon;
        $this->dispatch('editModalToggle');
        $this->resetValidation();
    }
    public function submit()
    {
        $validated  = $this->validate();
        $this->counter->update($validated);
        $this->dispatch('editModalToggle');
        $this->dispatch('refreshData')->to(CounterData::class);
    }
    public function render()
    {
        return view('admin.counters.livewire.counter-update');
    }
}
