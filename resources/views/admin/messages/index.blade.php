@extends('admin.layouts.admin-master')
@section('title', 'Messages')
@section('messages-active', 'active')
@section('content')

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="mb-3">

            <h4 class="fw-bold py-3 mb-1 d-inline "><span class="text-muted fw-light">Messages</h4>
        </div>

        <div class=" card mb-4">
            <div class="card-body">
                @livewire('admin.messages.livewire.messages-data')
            </div>
        </div><!-- card-big -->
        @livewire('admin.messages.livewire.messages-show')
        @livewire('admin.messages.livewire.messages-delete')
    </div>

@endsection
