@extends('layouts.app)

@section('content')

<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Device name</th>
            
        </tr>
    </thead>
    <tbody>
        @foreach ($devices->items() as $device)
        <tr>
            <td>{{ $device->id}}</td>
            <td>{{ $device->name}}</td>
            <td>{{ $device->model}}</td>
            
        </tr>
        @foreach
    </tbody>

</table>

@endsection
