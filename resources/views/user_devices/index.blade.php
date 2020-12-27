@extends('layouts.app)

@section('content')

<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Assigned at</th>
            <th scope="col">Returned at</th>
            
        </tr>
    </thead>
    <tbody>
        @foreach ($user_devices->items() as $user_device)
        <tr>
            <td>{{ $user_device->id}}</td>
            <td>{{ $user_device->assigned_at}}</td>
            <td>{{ $user_device->returned_at}}</td>
            
        </tr>
        @foreach
    </tbody>

</table>

@endsection
