@extends('layouts.app)

@section('content')

<a href="{{ route('contries.create') }}" class="btn btn-primary mt-5">Add</a>

<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Native Name</th>
            <th scope="col">Action</th>
            
        </tr>
    </thead>
    <tbody>
        @foreach ($contries->items() as $country)
        <tr>
            <td>{{ $country->id}}</td>
            <td>{{ $country->name}}</td>
            <td>{{ $country->native_name}}</td>
            <td>
                <a class="btn btn-outline-secondary" href="{{ route('contries.show', ['country'=> $country->id])}}"> Details</a>
                <a class="btn btn-outline-secondary" href="{{ route('contries.edit', ['country'=> $country->id])}}"> Edit</a>
            </td>
            
        </tr>
        @foreach
    </tbody>

</table>

@endsection
