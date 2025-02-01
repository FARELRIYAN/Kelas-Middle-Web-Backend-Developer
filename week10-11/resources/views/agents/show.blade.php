@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Agent Details</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $agent->name }}</h5>
            <p class="card-text">{{ $agent->description }}</p>
            <p class="card-text"><small class="text-muted">Release Date: {{ $agent->release_date }}</small></p>
            <p class="card-text"><small class="text-muted">Image: {{ $agent->image }}</small></p>
        </div>
    </div>
    <a href="{{ route('agents.index') }}" class="btn btn-primary mt-3">Back to List</a>
</div>
@endsection