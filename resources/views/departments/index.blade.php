@extends('layouts.app)

@section('content')

<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Departments name</th>
            
        </tr>
    </thead>
    <tbody>
        @foreach ($departments->items() as $department)
        <tr>
            <td>{{ $department->id}}</td>
            <td>{{ $department->name}}</td>
            
        </tr>
        @foreach
    </tbody>

</table>

@endsection
