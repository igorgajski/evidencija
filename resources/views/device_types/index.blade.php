@extends('layouts.app)

@section('content')

<a href="{{ route('device_types.create') }}" class="btn btn-primary mt-5">Add</a>

<table class="table table-striped mt-3">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Device name</th>
            <th scope="col">Action</th>
            
        </tr>
    </thead>
    <tbody>
        @foreach ($device_types->items() as $device_type)
        <tr>
            <td>{{ $device_type->id}}</td>
            <td>{{ $device_type->name}}</td>
            <td>
                <a class="btn btn-outline-secondary" href="{{ route('device_types.show', ['device_type'=> $device_type->id])}}"> Details</a>
                <a class="btn btn-outline-secondary" href="{{ route('device_types.edit', ['device_typeole'=> $device_type->id])}}"> Edit</a>
            </td>
            
        </tr>
        @foreach
    </tbody>

</table>

@endsection
