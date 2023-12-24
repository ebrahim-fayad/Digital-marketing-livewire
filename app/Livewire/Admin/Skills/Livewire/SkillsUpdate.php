<?php

namespace App\Livewire\Admin\Skills\Livewire;

use App\Models\Skill;
use Livewire\Component;

class SkillsUpdate extends Component
{
    public $skill;
    public $name;
    public $progress;
    protected $listeners = [
        'updateSkills'
    ];
    public function updateSkills($id)
    {
        $this->skill=Skill::findOrFail($id);
        $this->name=$this->skill->name;
        $this->progress=$this->skill->progress;
        $this->dispatch('editModalToggle');
        $this->resetValidation();
    }

    public function rules()
    {
        return [
            'name' => 'required',
            'progress' => 'required|numeric|min:1|max:100',
        ];
    }
    public function submit()
    {
        $validated = $this->validate();
        $this-> skill->update($validated);
        $this->dispatch('editModalToggle');
        $this->dispatch('refreshData')->to(SkillData::class);
    }
    public function render()
    {
        return view('admin.skills.livewire.skills-update');
    }
}
