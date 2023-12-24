<?php

namespace App\Livewire\Admin\Projects\Livewire;

use App\Models\Category;
use App\Models\Project;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class ProjectsUpdate extends Component
{
    use WithFileUploads;
    public $project, $name, $link, $image, $path, $description, $category_id;
    protected $listeners = ['updateProjects'];
    public function updateProjects($id)
    {
        $this->project= Project::findOrFail($id);
        $this->name= $this->project->name;
        $this->link= $this->project->link;
        $this->category_id= $this->project->category_id;
        $this->description= $this->project->description;
        $this->path= $this->project->path;
        $this->resetValidation();
        $this->dispatch('editModalToggle');
    }
    public function rules()
    {
        return [
            'name' => 'required',
            'link' => 'required',
            'description' => 'required',
            'category_id' => 'required',
        ];
    }
    public function attributes()
    {
        return [

            'category_id' => 'category',
        ];
    }
    public function submit()
    {
        $validated =$this->validate();
        if ($this->image) {
            Storage::delete($this->path);
            $imageName = $this->image->getClientOriginalName();
            $pathName = $this->image->storeAs("public/$this->name", $imageName);
            $validated['image'] = $imageName;
            $validated['path'] = $pathName;
        }
        $this->project->update($validated);
        Storage::deleteDirectory('livewire-tmp');
        $this->dispatch('editModalToggle');
        $this->reset('image');
        $this->dispatch('refreshData')->to(ProjectsData::class);
    }
    public function render()
    {
        return view('admin.projects.livewire.projects-update',[
            'categories' => Category::all(),
        ]);
    }
}
