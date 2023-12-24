@extends('admin.layouts.admin-master')
@section('title', 'Settings')
@section('setting-active', 'active')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-1"><span class="text-muted fw-light">Settings</h4>
        <div class=" card">
            @livewire('admin.settings.update-settings')
        </div><!-- card-big -->
    </div>

@endsection
