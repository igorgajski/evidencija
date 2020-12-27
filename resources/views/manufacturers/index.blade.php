@extends('layouts.app)

@section('content')

<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Manufacturers name</th>
            
        </tr>
    </thead>
    <tbody>
        @foreach ($manufacturers->items() as $manufacturer)
        <tr>
            <td>{{ $manufacturer->id}}</td>
            <td>{{ $manufacturer->name}}</td>
            
        </tr>
        @foreach
    </tbody>

</table>

@endsection
