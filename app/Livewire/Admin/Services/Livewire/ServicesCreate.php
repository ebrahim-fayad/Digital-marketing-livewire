<?php

namespace App\Livewire\Admin\Services\Livewire;

use App\Models\Service;
use Livewire\Component;

class ServicesCreate extends Component
{
    public $name, $description, $icon;
    public function rules()
    {
        return [
            'name' => 'required|unique:counters',
            'description' => 'required',
            'icon' => 'required',
        ];
    }
    protected $listeners = ['closed'];
    public function closed()
    {
        $this->reset('name', 'description', 'icon');
        $this->resetValidation();
    }
    public function submit()
    {
        $validated  = $this->validate();
        Service::create($validated);
        $this->reset('name', 'description', 'icon');
        $this->dispatch('createdModalToggle');
        $this->dispatch('refreshData')->to(ServicesData::class);
    }
    public function render()
    {
        return view('admin.services.livewire.services-create');
    }
}
