<x-app-layout>
    <x-slot name="header">
        <h1 class="h1">Edit Deal</h1>
    </x-slot>
    @vite('resources/css/app.css')
    <div class="container mt-5">
        <form action="{{ route('deal.update', $deal->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="account_id" class="form-label">Account ID</label>
                <input type="text" class="form-control" id="account_id" name="account_id" value="{{ $deal->account_id }}">
            </div>
            <!-- Add more form fields for editing the deal with pre-filled data -->
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</x-app-layout>