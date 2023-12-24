<?php

namespace App\Livewire\Admin\Projects\Livewire;

use App\Models\Category;
use App\Models\Project;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class ProjectsCreate extends Component
{
    use WithFileUploads;
    public $name,$link,$image,$path, $description,$category_id;
    protected $listeners = ['closed'];
    public function closed()
    {
        $this->reset('name','link','image','path','description','category_id');
        $this->resetValidation();
    }
    public function rules()
    {
        return [
            'name'=>'required|unique:projects',
            'link'=>'required',
            'image'=> 'image|required',
            'path'=>'nullable',
            'description'=> 'required',
            'category_id'=>'required',
        ];
    }
    public function attributes()
    {
        return [

            'category_id'=>'category',
        ];
    }
    public function submit()
    {

      $validated =   $this->validate($this->rules(),[],$this->attributes());
      $imageName = $this->image->getClientOriginalName();
      $pathName=$this->image->storeAs("public/$this->name",$imageName);
      $validated['image']=$imageName;
      $validated['path']=$pathName;
      Project::create($validated);
      $this->reset('name','link','image','path','description','category_id');
      Storage::deleteDirectory('livewire-tmp');
      $this->dispatch('createdModalToggle');
      $this->dispatch('refreshData')->to(ProjectsData::class);
    }
    public function render()
    {
        return view('admin.projects.livewire.projects-create',[
            'categories'=>Category::all(),
        ]);
    }
}
