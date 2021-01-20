@extends('layouts.app)

@section('content')
<div>
    <h4 class="mt-2">Details</h4>
    <ul class="list-unstyled">
        <li>Assigned at: {{$user_device->assigned_at }}</li>
        <li>Returned at: {{$user_device->returned_at  }}</li>
        
    </ul>
    <a href="{{ route('users_devices.index')}}" class="btn btn-outline-secondary"> Back </a>
</div>

@endsection
