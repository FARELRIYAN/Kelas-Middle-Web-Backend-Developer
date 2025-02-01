@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Agent</h1>
    <form action="{{ route('agents.update', $agent->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" value="{{ $agent->name }}" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" class="form-control" required>{{ $agent->description }}</textarea>
        </div>
        <div class="form-group">
            <label for="release_date">Release Date</label>
            <input type="datetime-local" name="release_date" class="form-control" value="{{ $agent->release_date }}" required>
        </div>
        <div class="form-group">
            <label for="image">Image URL</label>
            <input type="text" name="image" class="form-control" value="{{ $agent->image }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection