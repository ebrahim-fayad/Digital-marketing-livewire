@extends('admin.components.update-modal',['title'=>'Update Services'])
@section('content-modal')
    <div class="col-md-4 mb-3">
        <label class="form-label">Name</label>
        <input type="text" class="form-control" placeholder="Enter Name" wire:model='name' />
        @include('admin.components.error', ['property' => 'name'])
    </div>
    <div class="col-md-4 mb-0">
        <label class="form-label">Description</label>
        <input type="text" class="form-control" placeholder="Your Description" wire:model='description' />
        @include('admin.components.error', ['property' => 'description'])
    </div>
    <div class="col-md-4 mb-0">
        <label class="form-label">Icon</label>
        <input type="text" class="form-control" placeholder="Your Icon" wire:model='icon' />
        @include('admin.components.error', ['property' => 'icon'])
    </div>
@endsection
