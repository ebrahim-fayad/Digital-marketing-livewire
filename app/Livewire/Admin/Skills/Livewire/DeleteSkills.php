<?php

namespace App\Livewire\Admin\Skills\Livewire;

use App\Models\Skill;
use Exception;
use Livewire\Component;

class DeleteSkills extends Component
{
    public  $skill, $name;

    protected $listeners = ['deleteSkills'];
    public function deleteSkills($id)
    {
        $this->skill = Skill::find($id);
        $this->name = $this->skill->name;
        $this->dispatch('deleteModalToggle');
    }

    public function submit()
    {

       $this->skill->delete();
       $this->reset('skill');
        $this->dispatch('deleteModalToggle');
        $this->dispatch('refreshData')->to(SkillData::class);
    }
    public function render()
    {
        return view('admin.skills.livewire.delete-skills');
    }
}
