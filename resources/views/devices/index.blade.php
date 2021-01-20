@extends('layouts.app)

@section('content')

<a href="{{ route('devices.create') }}" class="btn btn-primary mt-5">Add</a>

<table class="table table-striped mt-3">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Device name</th>
            <th scope="col">Action</th>
            
        </tr>
    </thead>
    <tbody>
        @foreach ($devices->items() as $device)
        <tr>
            <td>{{ $device->id}}</td>
            <td>{{ $device->name}}</td>
            <td>{{ $device->model}}</td>
            <td>
                <a class="btn btn-outline-secondary" href="{{ route('devices.show', ['devices'=> $devices->id])}}"> Details</a>
                <a class="btn btn-outline-secondary" href="{{ route('devices.edit', ['devices'=> $devices->id])}}"> Edit</a>
            </td>
            
        </tr>
        @foreach
    </tbody>

</table>

@endsection
