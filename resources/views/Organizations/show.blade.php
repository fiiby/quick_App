<!-- resources/views/organizations/show.blade.php -->

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Organization Details') }}
        </h2>
    </x-slot>
    @vite('resources/css/app.css')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6">
                    <div>
                        <strong>Name:</strong> {{ $organization->name }}
                    </div>
                    <div>
                        <strong>Industry:</strong> {{ $organization->industry }}
                    </div>
                    <div>
                        <strong>Organize:</strong> {{ $organization->organize }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>