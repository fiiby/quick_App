<x-app-layout>
    <x-slot name="header">
        <h1 class="h1">Deals</h1>
        <a href="{{ route('deal.create') }}" class="btn btn-primary">Create Deal</a>
    </x-slot>
    @vite('resources/css/app.css')
    <div class="container mt-5">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Account ID</th>
                    <!-- Add more table headings as needed -->
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($deals as $deal)
                <tr>
                    <td>{{ $deal->id }}</td>
                    <td>{{ $deal->account_id }}</td>
                    <!-- Add more table data as needed -->
                    <td>
                        <a href="{{ route('deal.show', $deal->id) }}" class="btn btn-primary">View</a>
                        <a href="{{ route('deal.edit', $deal->id) }}" class="btn btn-secondary">Edit</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>