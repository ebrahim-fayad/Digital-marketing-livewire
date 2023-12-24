<?php

namespace App\Livewire\Admin\Services\Livewire;

use App\Models\Service;
use Livewire\Component;

class ServicesDelete extends Component
{
    public $service, $name;
    protected $listeners = ['deleteServices'];
    public function deleteServices($id)
    {
        $this->service = Service::findOrFail($id);
        $this->name = $this->service->name;
        $this->dispatch('deleteModalToggle');
    }
    public function submit()
    {
        $this->service->delete();
        $this->reset('service');
        $this->dispatch('deleteModalToggle');
        $this->dispatch('refreshData')->to(ServicesData::class);
    }
    public function render()
    {
        return view('admin.services.livewire.services-delete');
    }
}
