<?php

namespace App\Livewire\Admin\Categories\Livewire;

use App\Models\Category;
use Livewire\Component;

class CategoriesDelete extends Component
{
    public $category, $name;
    //make event for opening delete-modal
    protected $listeners = ['deleteCategories'];
    public function deleteCategories($id)
    {
        $this->category = Category::findOrFail($id);
        $this->name = $this->category->name;
        //running event for opening delete-modal-
        $this->dispatch('deleteModalToggle');
    }
    public function submit()
    {
        $this->category->delete();
        //for more clean code and prevent unexpected error
        $this->reset('category');
        //running event for opening delete-modal-
        $this->dispatch('deleteModalToggle');
        //running event for refreshing CategoryData
        $this->dispatch('refreshData')->to(CategoriesData::class);
    }
    public function render()
    {
        return view('admin.categories.livewire.categories-delete');
    }
}
