<?php

namespace App\Livewire\Admin\Categories\Livewire;

use App\Models\Category;
use Livewire\Attributes\Validate;
use Livewire\Component;

class CategoriesCreate extends Component
{
    //make property and validation
    #[Validate('required|unique:categories')]
    public $name;
    //make event for delete validation when modal close
    protected $listeners = ['closed'];
    public function closed()
    {
        $this->reset('name');
        $this->resetValidation();
    }
    public function submit()
    {
        //running validation
        $validated=$this->validate();
        //create new category
        Category::create($validated);
        //reset data after submitted
        $this->reset('name');
        //running event for closing create-modal after submitted
        $this->dispatch('createdModalToggle');
        //running event fir refreshing CategoryDta
        $this->dispatch('refreshData')->to(CategoriesData::class);
    }
    public function render()
    {
        return view('admin.categories.livewire.categories-create');
    }
}
