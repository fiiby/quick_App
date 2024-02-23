<x-app-layout>
    <x-slot name="header">
        <h1 class="h1">Deal Details</h1>
    </x-slot>

    <div class="container mt-5">
        <p>ID: {{ $deal->id }}</p>
        <p>Account ID: {{ $deal->account_id }}</p>
        <!-- Add more deal details as needed -->
        <a href="{{ route('deal.index') }}" class="btn btn-primary">Back to Deals</a>
    </div>
</x-app-layout>