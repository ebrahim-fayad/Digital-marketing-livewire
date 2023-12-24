<?php

namespace App\Livewire\Admin\Projects\Livewire;

use App\Models\Project;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class ProjectsDelete extends Component
{
    public $project,$name;
    protected $listeners = ['deleteProjects'];
    public function deleteProjects($id)
    {
        $this->project=Project::findOrFail($id);
        $this->name = $this->project->name;
        $this->dispatch('deleteModalToggle');
    }
    public function submit()
    {
        Storage::deleteDirectory("public/$this->name");
        $this->project->delete();
        $this->reset('project');
        $this->dispatch('deleteModalToggle');
        $this->dispatch('refreshData')->to(ProjectsData::class);
    }
    public function render()
    {
        return view('admin.projects.livewire.projects-delete');
    }
}
