@extends('admin.components.delete-modal',['title'=>'Delete Subscriber'])
@section('content-modal')
                    Are you sure to delete this is skill email is : <span class="text-danger">{{ $email }}</span>

@endsection
