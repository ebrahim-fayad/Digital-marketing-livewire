<?php

namespace App\Livewire\Front\Components;

use App\Models\Subscribers;
use Livewire\Attributes\Validate;
use Livewire\Component;

class SubscribeComponent extends Component
{
    #[Validate('required|email|unique:subscribers')]
    public $email;
    public function submit()
    {
        $validated=$this->validate();
        Subscribers::create(['email'=>$validated['email']]);
        session()->flash('success','email added successfully');
        $this->reset('email');
    }
    public function render()
    {
        return view('front.components.subscribe-component');
    }
}
