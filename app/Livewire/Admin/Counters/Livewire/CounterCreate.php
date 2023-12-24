<?php

namespace App\Livewire\Admin\Counters\Livewire;

use App\Models\Counter;
use Livewire\Component;

class CounterCreate extends Component
{
    public $name,$count,$icon;
    public function rules()
    {
        return [
            'name'=>'required|unique:counters',
            'count'=> 'required|numeric',
            'icon'=>'required',
        ];
    }
    protected $listeners = ['closed'];
    public function closed()
    {
        $this->reset('name','count','icon');
        $this->resetValidation();
    }
    public function submit()
    {
        $validated  = $this->validate();
        Counter::create($validated);
        $this->reset('name','count','icon');
        $this->dispatch('createdModalToggle');
        $this->dispatch('refreshData')->to(CounterData::class);
    }
    public function render()
    {
        return view('admin.counters.livewire.counter-create');
    }
}
