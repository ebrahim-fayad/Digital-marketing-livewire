@extends('admin.layouts.admin-master')
@section('title', 'Services')
@section('services-active', 'active')
@section('content')

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="mb-3">

            <h4 class="fw-bold py-3 mb-1 d-inline "><span class="text-muted fw-light">Services</h4>

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary btn-sm mb-2 mx-4" data-bs-toggle="modal"
                data-bs-target="#createdModalToggle">
                Add new Services
            </button>




        </div>

        <div class=" card mb-4">
            <div class="card-body">
                @livewire('admin.services.livewire.services-data')
            </div>
        </div><!-- card-big -->
        @livewire('admin.services.livewire.services-create')
        @livewire('admin.services.livewire.services-update')
        @livewire('admin.services.livewire.services-delete')
    </div>

@endsection
