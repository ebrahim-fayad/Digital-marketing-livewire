<?php

namespace App\Livewire\Admin\Categories\Livewire;

use App\Models\Category;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class CategoriesData extends Component
{
    use WithPagination;
    #[Url(except:'',as:'S')]
    public $search ='';
    //for refresh Dat i made event
    protected $listeners = ['refreshData'=>'$refresh'];
    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        return view('admin.categories.livewire.categories-data',[
            'categories'=>Category::where('name','like',"%$this->search%")->latest()->paginate('5')
        ]);
    }
}
