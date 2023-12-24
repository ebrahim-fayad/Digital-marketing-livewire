@extends('admin.layouts.admin-master')
@section('title', 'Projects')
@section('projects-active', 'active')
@section('content')

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="mb-3">

            <h4 class="fw-bold py-3 mb-1 d-inline "><span class="text-muted fw-light">Projects</h4>

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary btn-sm mb-2 mx-4" data-bs-toggle="modal"
                data-bs-target="#createdModalToggle">
                Add new Projects
            </button>

            <!-- Modal -->
        </div>
        <div class=" card mb-4">
            <div class="card-body">
                @livewire('admin.projects.livewire.projects-data')
            </div>
            @livewire('admin.projects.livewire.projects-create')
            @livewire('admin.projects.livewire.projects-update')
            @livewire('admin.projects.livewire.projects-delete')
        </div><!-- card-big -->

    </div><!-- container -->

@endsection
