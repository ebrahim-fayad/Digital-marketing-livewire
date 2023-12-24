<?php

namespace App\Livewire\Admin\Auth;

use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class AdminProfile extends Component
{
    public function logout()
    {
        Auth::guard('admin')->logout();

        session()->forget('guard.admin');

        session()->regenerateToken();

        return to_route('admin.login');
    }
    public function test()
    {
        return to_route('admin.profile');
    }
    public function render()
    {
        return view('admin.auth.admin-profile',[
            'admin'=>Admin::where('id',1)->first(),
        ]);
    }
}
