<x-app-layout>
    <x-slot name="header">
        <h1 class="h1">Create Deal</h1>
    </x-slot>
    @vite('resources/css/app.css')
    <div class="container mt-5">
        <form action="{{ route('deal.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="account_id" class="form-label">Account ID</label>
                <input type="text" class="form-control" id="account_id" name="account_id">
            </div>
            <!-- Add more form fields for creating a new deal -->
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</x-app-layout>