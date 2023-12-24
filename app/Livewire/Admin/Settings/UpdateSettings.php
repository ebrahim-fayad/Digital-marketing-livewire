<?php

namespace App\Livewire\Admin\Settings;

use App\Models\Setting;
use Livewire\Component;

class UpdateSettings extends Component
{
    public $setting;
    public function rules()
    {
   return([
            'setting.name'=>'required|string',
            'setting.email'=>'required|email',
            'setting.phone'=>'required',
            'setting.address'=>'nullable',
            'setting.facebook'=>'nullable',
            'setting.twitter'=>'nullable',
            'setting.linkedin'=>'nullable',
            'setting.instagram'=>'nullable',
        ]);
    }
    public function mount()
    {
        $this->setting = Setting::find(1);
    }
    public function submit()
    {
        sleep(1.5);
        $this->validate();
       $this->setting->save();
        session()->flash('success','Settings Updated Successfully');
    }
    public function render()
    {
        return view('admin.settings.update-settings');
    }
}
