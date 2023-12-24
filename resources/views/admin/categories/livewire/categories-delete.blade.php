@extends('admin.components.delete-modal',['title'=>'Delete Category'])
@section('content-modal')
Are you sure To Delete This Category : <span class="text-danger">{{ $name }}</span>
@endsection
