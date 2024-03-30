<!-- resources/views/leads/destroy.blade.php -->
<x-app-layout>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Delete Lead</div>
                    @vite('resources/css/app.css')
                    <div class="card-body">
                        <p>Are you sure you want to delete this lead?</p>
                        <form action="{{ route('leads.destroy', $lead->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                            <a href="{{ route('leads.index') }}" class="btn btn-secondary">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>