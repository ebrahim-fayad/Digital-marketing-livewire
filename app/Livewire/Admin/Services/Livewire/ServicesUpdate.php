<?php

namespace App\Livewire\Admin\Services\Livewire;

use App\Models\Service;
use Livewire\Component;

class ServicesUpdate extends Component
{
    public $service, $name, $description, $icon;
    public function rules()
    {
        return [
            'name' => 'required',
            'description' => 'required',
            'icon' => 'required',
        ];
    }
    protected $listeners = ['updateServices'];
    public function updateServices($id)
    {
        $this->service = Service::findOrFail($id);
        $this->name = $this->service->name;
        $this->description = $this->service->description;
        $this->icon = $this->service->icon;
        $this->dispatch('editModalToggle');
        $this->resetValidation();
    }
    public function submit()
    {
        $validated  = $this->validate();
        $this->service->update($validated);
        $this->dispatch('editModalToggle');
        $this->dispatch('refreshData')->to(ServicesData::class);
    }
    public function render()
    {
        return view('admin.services.livewire.services-update');
    }
}
