@extends('admin.layouts.admin-master')
@section('title', 'Categories')
@section('categories-active', 'active')
@section('content')

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="mb-3">

            <h4 class="fw-bold py-3 mb-1 d-inline "><span class="text-muted fw-light">Categories</h4>

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary btn-sm mb-2 mx-4" data-bs-toggle="modal"
                data-bs-target="#createdModalToggle">
                Add new Categories
            </button>
            <!-- Modal -->
        </div>

        <div class=" card mb-4">
            <div class="card-body">
                @livewire('admin.categories.livewire.categories-data')
            </div>
        </div><!-- card-big -->
        @livewire('admin.categories.livewire.categories-create')
        @livewire('admin.categories.livewire.categories-update')
        @livewire('admin.categories.livewire.categories-delete')
    </div>

@endsection
