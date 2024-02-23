resources/views/stages/index.blade.php
<x-app-layout>
    <x-slot name="header">
        <h1 class="text-2xl font-semibold leading-tight">Stages</h1>
    </x-slot>

    <div class="py-6">
        <a href="{{ route('stages.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Create Stage</a>

        <table class="table-auto mt-4">
            <thead>
                <tr>
                    <th class="px-4 py-2">ID</th>
                    <th class="px-4 py-2">Name</th>
                    <th class="px-4 py-2">Created At</th>
                    <th class="px-4 py-2">Updated At</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($stages as $stage)
                <tr>
                    <td class="border px-4 py-2">{{ $stage->id }}</td>
                    <td class="border px-4 py-2">{{ $stage->name }}</td>
                    <td class="border px-4 py-2">{{ $stage->created_at }}</td>
                    <td class="border px-4 py-2">{{ $stage->updated_at }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>