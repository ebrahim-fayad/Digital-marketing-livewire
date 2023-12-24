@extends('admin.components.create-modal',['title'=>'Add New Count'])
@section('content-modal')
    <div class="col-md-4 mb-3">
        <label class="form-label">Name</label>
        <input type="text" class="form-control" placeholder="Enter Name" wire:model='name' />
        @include('admin.components.error', ['property' => 'name'])
    </div>
    <div class="col-md-4 mb-0">
        <label class="form-label">Count</label>
        <input type="text" class="form-control" placeholder="Your Count" wire:model='count' />
        @include('admin.components.error', ['property' => 'count'])
    </div>
    <div class="col-md-4 mb-0">
        <label class="form-label">Icon</label>
        <input type="text" class="form-control" placeholder="Your Icon" wire:model='icon' />
        @include('admin.components.error', ['property' => 'icon'])
    </div>
@endsection
