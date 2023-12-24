<?php

namespace App\Livewire\Admin\Categories\Livewire;

use App\Models\Category;
use Livewire\Attributes\Validate;
use Livewire\Component;

class CategoriesUpdate extends Component
{
    public $category;
    #[Validate('required')]
    public $name;
    //make event for opening update-modal
    protected $listeners = ['updateCategories'];
    public function updateCategories($id)
    {
        $this->category = Category::findOrFail($id);
        $this->name = $this->category->name;
        //reset validation
        $this->resetValidation();
        //running event for opening edit-modal-
        $this->dispatch('editModalToggle');
    }
    public function submit()
    {
        $validated=$this->validate();
        $this->category->update($validated);
        //running event for opening edit-modal-
        $this->dispatch('editModalToggle');
        //running event for refreshing CategoryData
        $this->dispatch('refreshData')->to(CategoriesData::class);
    }
    public function render()
    {
        return view('admin.categories.livewire.categories-update');
    }
}
