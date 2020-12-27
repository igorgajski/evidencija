@extends('layouts.app)

@section('content')

<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Native Name</th>
            
        </tr>
    </thead>
    <tbody>
        @foreach ($contries->items() as $country)
        <tr>
            <td>{{ $country->id}}</td>
            <td>{{ $country->name}}</td>
            <td>{{ $country->native_name}}</td>
            
        </tr>
        @foreach
    </tbody>

</table>

@endsection
