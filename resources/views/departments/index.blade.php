@extends('layouts.app)

@section('content')

<a href="{{ route('departments.create') }}" class="btn btn-primary mt-5">Add</a>

<table class="table table-striped mt-3">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Departments name</th>
            <th scope="col">Action</th>
            
        </tr>
    </thead>
    <tbody>
        @foreach ($departments->items() as $department)
        <tr>
            <td>{{ $department->id}}</td>
            <td>{{ $department->name}}</td>
            <td>
                <a class="btn btn-outline-secondary" href="{{ route('departments.show', ['department'=> $department->id])}}"> Details</a>
                <a class="btn btn-outline-secondary" href="{{ route('departments.edit', ['department'=> $department->id])}}"> Edit</a>
            </td>
            
        </tr>
        @foreach
    </tbody>

</table>

@endsection
