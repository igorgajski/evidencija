@extends('layouts.app)

@section('content')

<a href="{{ route('user_devices.create') }}" class="btn btn-primary mt-5">Add</a>

<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Assigned at</th>
            <th scope="col">Returned at</th>
            <th scope="col">Action</th>
            
        </tr>
    </thead>
    <tbody>
        @foreach ($user_devices->items() as $user_device)
        <tr>
            <td>{{ $user_device->id}}</td>
            <td>{{ $user_device->assigned_at}}</td>
            <td>{{ $user_device->returned_at}}</td>
            <td>
                <a class="btn btn-outline-secondary" href="{{ route('user_devices.show', ['user_device'=> $user_device->id])}}"> Details</a>
                <a class="btn btn-outline-secondary" href="{{ route('user_devices.edit', ['user_device'=> $user_device->id])}}"> Edit</a>
            </td>
            
        </tr>
        @foreach
    </tbody>

</table>

@endsection
