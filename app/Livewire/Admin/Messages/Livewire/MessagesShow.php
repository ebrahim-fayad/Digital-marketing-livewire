<?php

namespace App\Livewire\Admin\Messages\Livewire;

use App\Models\Message;
use Livewire\Component;

class MessagesShow extends Component
{
    public  $name,$email,$subject,$message;
    protected $listeners = ['showMessages'];
    public function showMessages($id)
    {
        $record = Message::findOrFail($id);
        $this->name = $record->name;
        $this->email = $record->email;
        $this->subject = $record->subject;
        $this->message = $record->message;
        $record->update([
            'status'=>'1'
        ]);
        $this->dispatch('showModalToggle');
        $this->dispatch('refreshData')->to(MessagesData::class);
    }
    public function render()
    {
        return view('admin.messages.livewire.messages-show');
    }
}
