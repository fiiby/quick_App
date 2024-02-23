<!-- resources/views/organizations/index.blade.php -->

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Organizations') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6">
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
</x-app-layout>