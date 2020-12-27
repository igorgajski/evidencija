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
        @foreach ($device_types->items() as $device_type)
        <tr>
            <td>{{ $device_type->id}}</td>
            <td>{{ $device_type->name}}</td>
            
        </tr>
        @foreach
    </tbody>

</table>

@endsection
