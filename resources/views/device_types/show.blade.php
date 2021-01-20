@extends('layouts.app)

@section('content')
<div>
    <h4 class="mt-2">Details</h4>
    <ul class="list-unstyled">
        <li>Name: {{device_type->name }}</li>

    </ul>
    <a href="{{ route('device_types.index')}} " class="btn btn-outline-secondary"> Back </a>
</div>

@endsection
