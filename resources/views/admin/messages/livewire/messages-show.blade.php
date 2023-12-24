@extends('admin.components.show-modal',['title'=>'Show Messages'])
@section('content-modal')
    <div class="col-md-4 mb-3">
        <label class="form-label">Name</label>
        <div class="form-control">{{ $name }}</div>
    </div>
    <div class="col-md-4 mb-3">
        <label class="form-label capitalize">email</label>
        <div class="form-control">{{ $email }}</div>
    </div>
    <div class="col-md-4 mb-3">
        <label class="form-label capitalize">subject</label>
        <div class="form-control">{{ $subject }}</div>
    </div>
    <div class="col-md-8 mb-3 mx-auto">
        <label class="form-label capitalize">message</label>
        <div class="form-control">{{ $message }}</div>
    </div>
@endsection
