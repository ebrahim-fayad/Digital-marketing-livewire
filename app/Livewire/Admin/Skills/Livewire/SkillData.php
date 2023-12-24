<?php

namespace App\Livewire\Admin\Skills\Livewire;

use App\Models\Skill;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class SkillData extends Component
{
    #[url(except:'',as:"S")]
    public $search = '';
    use WithPagination;
    protected $listeners = ['refreshData' => '$refresh'];
    public function updatingSearch()
    {
        $this->resetPage();
    }
    public function render()
    {
        return view('admin.skills.livewire.skill-data',[
            'skills'=>Skill::where('name','like',"%$this->search%")->latest()->paginate('6'),
        ]);
    }
}
