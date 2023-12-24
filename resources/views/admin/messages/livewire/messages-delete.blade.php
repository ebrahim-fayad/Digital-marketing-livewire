@extends('admin.components.delete-modal',['title'=>'Delete Messages'])
@section('content-modal')
    Are you Sure To Delete This Message From : {{ $name }}
@endsection
