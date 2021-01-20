@extends('layouts.app)

@section('content')
<div>
    <h4 class="mt-2">Details</h4>
    <ul class="list-unstyled">
        <li>Name: {{$department->name }}</li>
        
    </ul>
    <a href="{{ route('departments.index')}} " class="btn btn-outline-secondary"> Back </a>
</div>

@endsection
