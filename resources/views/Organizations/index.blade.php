<!-- resources/views/organizations/index.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Organizations</div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Industry</th>
                                <th>Organize</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($organizations as $organization)
                            <tr>
                                <td>{{ $organization->name }}</td>
                                <td>{{ $organization->industry }}</td>
                                <td>{{ $organization->organize }}</td>
                                <td>
                                    <a href="{{ route('organizations.show', $organization->id) }}" class="btn btn-primary btn-sm">View</a>
                                    <a href="{{ route('organizations.edit', $organization->id) }}" class="btn btn-success btn-sm">Edit</a>
                                    <form action="{{ route('organizations.destroy', $organization->id) }}" method="POST" style="display: inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this organization?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection