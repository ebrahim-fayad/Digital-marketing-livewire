<?php

namespace App\Livewire\Admin\Auth;

use App\Models\Admin;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class AdminProfileImage extends Component
{
    use WithFileUploads;
    public $photo;
    public function uploadImage()
    {
        sleep(.5);
        $image=$this->photo->getClientOriginalName();
        $path = $this->photo->storeAs('public/admin',$image);
        $admin = Admin::where('id',1)->first();
        $admin->update([
            'img'=>$image,
            'path'=>$path,
        ]);
        $this->reset();
        return to_route('admin.index')->with('success','Photo Uploaded Successfully');
    }
    public function render()
    {
        return view('admin.auth.admin-profile-image');
    }
}
