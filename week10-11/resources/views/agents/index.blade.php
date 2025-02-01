@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Agents</h1>
    <a href="{{ route('agents.create') }}" class="btn btn-primary mb-3">Add New Agent</a>

    <form action="{{ route('agents.index') }}" method="GET" class="mb-3">
        <div class="input-group">
            <input type="text" name="search" class="form-control" placeholder="Search by name or description" value="{{ request('search') }}">
            <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="submit">Search</button>
            </div>
        </div>
    </form>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Release Date</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($agents as $agent)
            <tr>
                <td>{{ $agent->id }}</td>
                <td>{{ $agent->name }}</td>
                <td>{{ $agent->description }}</td>
                <td>{{ $agent->release_date }}</td>
                <td>{{ $agent->image }}</td>
                <td>
                    <a href="{{ route('agents.show', $agent->id) }}" class="btn btn-info btn-sm">View</a>
                    <a href="{{ route('agents.edit', $agent->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('agents.destroy', $agent->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{ $agents->links() }}
</div>
@endsection