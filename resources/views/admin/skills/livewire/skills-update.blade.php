@extends('admin.components.update-modal',['title'=>'Update Skill'])
@section('title', 'Updated Skills')
@section('content-modal')
    <div class="col-md-6 mb-3">
        <label class="form-label">Name</label>
        <input type="text" class="form-control" placeholder="Enter Name" wire:model='name' />
        @include('admin.components.error', ['property' => 'name'])
    </div>
    <div class="col-md-6 mb-0">
        <label class="form-label">Progress</label>
        <input type="text" class="form-control" placeholder="Your Progress" wire:model='progress' />
        @include('admin.components.error', ['property' => 'progress'])
    </div>
@endsection
