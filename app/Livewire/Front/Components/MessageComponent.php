<?php

namespace App\Livewire\Front\Components;

use App\Models\Message;
use Livewire\Component;

class MessageComponent extends Component
{
    public $name,$email,$subject,$message;
    public function rules()
    {
        return [
            'name'=>'required',
            'email'=>'required|email|unique:messages',
            'subject'=>'required',
            'message'=>'required',
        ];
    }
    public function submit()
    {
        $validated =$this->validate();
        Message::create($validated);
        session()->flash('message','Message Sent Successfully');
        $this->reset('name','email','subject','message');
    }
    public function render()
    {
        return view('front.components.message-component');
    }
}
