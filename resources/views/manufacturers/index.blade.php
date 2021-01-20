@extends('layouts.app)

@section('content')

<a href="{{ route('manufacturers.create') }}" class="btn btn-primary mt-5">Add</a>


<table class="table table-striped mt-3">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Manufacturers name</th>
            <th scope="col">Action</th>
            
        </tr>
    </thead>
    <tbody>
        @foreach ($manufacturers->items() as $manufacturer)
        <tr>
            <td>{{ $manufacturer->id}}</td>
            <td>{{ $manufacturer->name}}</td>
            <td>
                <a class="btn btn-outline-secondary" href="{{ route('manufacturers.show', ['manufacturer'=> $manufacturer->id])}}"> Details</a>
                <a class="btn btn-outline-secondary" href="{{ route('manufacturers.edit', ['manufacturer'=> $manufacturer->id])}}"> Edit</a>
            </td>
            
        </tr>
        @foreach
    </tbody>

</table>

@endsection
