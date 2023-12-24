<?php

namespace App\Livewire\Admin\Skills\Livewire;

use App\Models\Skill;
use Livewire\Component;

class SkillsCreate extends Component
{
    public $name;
    public $progress;
    protected $listeners=['closed'];
    public function closed()
    {
      $this->resetValidation();
    }
    public function rules()
    {
        return[
            'name'=> 'required|unique:skills',
            'progress'=>'required|numeric|min:1|max:100',
        ];
    }
    public function submit()
    {
        sleep(.5);
       $validated = $this->validate();
       Skill::create($validated);
       $this->reset(['name','progress']);
       $this->dispatch('createdModalToggle');
       $this->dispatch('refreshData')->to(SkillData::class);
    }
    public function render()
    {
        return view('admin.skills.livewire.skills-create');
    }
}
