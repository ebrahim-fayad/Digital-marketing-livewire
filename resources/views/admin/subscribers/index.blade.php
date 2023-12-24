@extends('admin.layouts.admin-master')
@section('title', 'Subscribers')
@section('subscribers-active', 'active')
@section('content')

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="mb-3">

            <h4 class="fw-bold py-3 mb-1 d-inline "><span class="text-muted fw-light">Subscribers</h4>
        </div>

        <div class=" card mb-4">
            <div class="card-body">
                @livewire('admin.subscribers.livewire.subscribers-data')
            </div>
            @livewire('admin.subscribers.livewire.subscribers-delete')
        </div><!-- card-big -->

    </div>

@endsection
