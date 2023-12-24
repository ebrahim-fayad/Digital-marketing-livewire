@extends('admin.layouts.admin-master')
@section('title', 'Counters')
@section('counters-active', 'active')
@section('content')

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="mb-3">

            <h4 class="fw-bold py-3 mb-1 d-inline "><span class="text-muted fw-light">Counters</h4>

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary btn-sm mb-2 mx-4" data-bs-toggle="modal"
                data-bs-target="#createdModalToggle">
                Add new Counter
            </button>

            <!-- Modal -->

            @livewire('admin.counters.livewire.counter-create')

        </div>

        <div class=" card mb-4">
            <div class="card-body">
                @livewire('admin.counters.livewire.counter-data')
            </div>
        </div><!-- card-big -->
        @livewire('admin.counters.livewire.counter-update')
        @livewire('admin.counters.livewire.counter-delete')
    </div>

@endsection
