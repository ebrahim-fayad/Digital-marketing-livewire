<?php

namespace App\Livewire\Admin\Projects\Livewire;

use App\Models\Project;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class ProjectsData extends Component
{
    use WithPagination;
    //make property for search
    #[Url(except:'',as:'S')]
    public $search='';
    //event for refresh Component after any action
    protected $listeners = ['refreshData'=>'$refresh'];
    public function updatingSearch()
    {
        $this->resetPage();
    }
    public function render()
    {
        return view('admin.projects.livewire.projects-data',[
            'projects' => Project::where('name', "like", "%$this->search%")->paginate(4)
        ]);
    }
}
