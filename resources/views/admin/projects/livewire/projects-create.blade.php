@extends('admin.components.create-modal',['title'=>'Add New Project'])
@section('content-modal')
    <div class="col-md-6 mb-3">
        <label class="form-label">Name</label>
        <input type="text" class="form-control" placeholder="Enter Name" wire:model='name' />
        @include('admin.components.error', ['property' => 'name'])
    </div>
    <div class="col-md-6 mb-3">
        <label class="form-label  text-capitalize">link</label>
        <input type="text" class="form-control" placeholder="Your Link" wire:model='link' />
        @include('admin.components.error', ['property' => 'link'])
    </div>
    <div class="col-md-6 mb-3">
        <label class="form-label text-capitalize">image</label>
        <input type="file" class="form-control"  wire:model='image' />
        @include('admin.components.error', ['property' => 'image'])
        <div class="text-center mt-2" wire:loading>
                <div class="spinner-border mx-auto  text-danger" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
            </div>
    </div>

    <div class="col-md-6 mb-3">
        <label class="form-label  text-capitalize">category</label>
        <select wire:model='category_id' class="form-select">
            <option value="">Select Category</option>
            @if (count($categories)>0)
            @foreach ($categories as $category)
            <option value="{{ $category->id }}" wire:key="category-{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
            @endif
        </select>
        @include('admin.components.error', ['property' => 'category_id'])
    </div>
        @if ($image)
    <div class="my-4">
        <img src="{{ $image->temporaryUrl() }}" width="100%" height="150px" alt="">
    </div>
    @endif
    <div class="col-md-12 mb-3 ">
        <label class="form-label text-capitalize">description</label>
        <textarea class="form-control" wire:model='description' placeholder="Your Description"></textarea>
        @include('admin.components.error', ['property' => 'description'])
    </div>
@endsection
