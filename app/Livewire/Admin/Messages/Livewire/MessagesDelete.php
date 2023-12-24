<?php

namespace App\Livewire\Admin\Messages\Livewire;

use App\Models\Message;
use Livewire\Component;

class MessagesDelete extends Component
{
    public $message,$name;
    protected $listeners = ['deleteMessages'];
    public function deleteMessages($id)
    {
        $this->message=Message::findOrFail($id);
        $this->name = Message::findOrFail($id)->name;
        $this->dispatch('deleteModalToggle');
    }
    public function submit()
    {
        $this->message->delete();
        $this->reset('message');
        $this->dispatch('deleteModalToggle');
        $this->dispatch('refreshData')->to(MessagesData::class);
    }
    public function render()
    {
        return view('admin.messages.livewire.messages-delete');
    }
}
