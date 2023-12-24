<?php

namespace App\Livewire\Admin\Services\Livewire;

use App\Models\Service;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class ServicesData extends Component
{
    use WithPagination;
    #[Url(except:'',as:'S')]
    public $search ='';
    public function updatingSearch()
    {
        $this->resetPage();
    }
    protected $listeners = ['refreshData'=>'$refresh'];
    public function render()
    {
        return view('admin.services.livewire.services-data',[
            'services'=>Service::where('name',"like","%$this->search%")->paginate('8')
        ]);
    }
}
