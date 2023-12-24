@extends('admin.components.update-modal',['title'=>'Update Category'])
@section('content-modal')
    <div class="col-md-8 mb-3 mx-auto">
       <label class="form-label">Name</label>
        <input type="text" class="form-control" placeholder="Enter Category Name" wire:model='name' />
        @include('admin.components.error', ['property' => 'name'])
    </div>
@endsection
