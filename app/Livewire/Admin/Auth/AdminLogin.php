<?php

namespace App\Livewire\Admin\Auth;

use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Validation\ValidationException;
use Livewire\Attributes\Validate;
use Livewire\Component;

class AdminLogin extends Component
{
    #[Validate('required', message: 'هذا الحقل مطلوب')]
    #[Validate('email', message: 'هذا الحقل يجب ان يكون من نوع ايميل')]
    public $email;
    #[Validate('required', message: 'هذا الحقل مطلوب')]
    public $password;
    public $remember;
    public function render()
    {
        return view('admin.auth.admin-login');
    }
    public function submit()
    {
        sleep(.5);
        $this->validate();
        $user = Admin::where('email', $this->email)->first();
        if ($user) {
            if (Hash::check($this->password, $user->password)) {
                Auth::guard('admin')->attempt([
                    'email' => $this->email,
                    'password' => $this->password,
                ], $this->remember);
                return to_route('admin.index');
            } else {

                throw ValidationException::withMessages(['password' => trans('auth.password')]);
            }
        } else {

            throw ValidationException::withMessages(['email' => trans('auth.email')]);
        }
        RateLimiter::clear($this->throttleKey());
    }
}
