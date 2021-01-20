@extends('layouts.app)

@section('content')
<div>
    <h4 class="mt-2">Details</h4>
    <ul class="list-unstyled">
        <li>Name: {{device->name }}</li>
        <li>Model: {{device->model }}</li>

    </ul>
    <a href="{{ route('devices.index')}} " class="btn btn-outline-secondary"> Back </a>
</div>

@endsection
