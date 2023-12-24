<?php

namespace App\Livewire\Front\Components;

use App\Models\Service;
use Livewire\Component;

class CustomServicesComponent extends Component
{
    public function render()
    {
        return view('front.components.custom-services-component',[
            'services'=>Service::take(3)->get(),
        ]);
    }
}
