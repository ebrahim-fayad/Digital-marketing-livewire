<?php

namespace App\Livewire\Admin\Subscribers\Livewire;

use App\Models\Subscribers;
use Livewire\Component;

class SubscribersDelete extends Component
{
    public $subscriber,$email;
    protected $listeners = ['deleteSubscribers'];
    public function deleteSubscribers($id)
    {
       $this->subscriber= Subscribers::findOrFail($id);
       $this->email = $this->subscriber->email;
       $this->dispatch('deleteModalToggle');
    }
    public function submit()
    {
        $this->subscriber->delete();
        $this->reset('subscriber');
        $this->dispatch('deleteModalToggle');
        $this->dispatch('refreshData')->to(SubscribersData::class);
    }
    public function render()
    {
        return view('admin.subscribers.livewire.subscribers-delete');
    }
}
