@extends('admin.layouts.admin-master')
@section('title', 'Skills')
@section('skill-active', 'active')
@section('content')

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="mb-3">
            @if (session('error'))
                <h1>ddd</h1>
            @endif
            <h4 class="fw-bold py-3 mb-1 d-inline "><span class="text-muted fw-light">Skills</h4>

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary btn-sm mb-2 mx-4" data-bs-toggle="modal"
                data-bs-target="#createdModalToggle">
                Add new Skill
            </button>

            <!-- Modal -->

            @livewire('admin.skills.livewire.skills-create')

        </div>

        <div class=" card mb-4">
            <div class="card-body">
                @livewire('admin.skills.livewire.skill-data')
            </div>
        </div><!-- card-big -->
        @livewire('admin.skills.livewire.skills-update')
        @livewire('admin.skills.livewire.delete-skills')
    </div>

@endsection
