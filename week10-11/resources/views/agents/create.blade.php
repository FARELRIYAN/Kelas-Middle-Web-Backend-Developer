@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create New Agent</h1>
    <form action="{{ route('agents.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" class="form-control" required></textarea>
        </div>
        <div class="form-group">
            <label for="release_date">Release Date</label>
            <input type="datetime-local" name="release_date" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="image">Image URL</label>
            <input type="text" name="image" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection