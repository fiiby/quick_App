<!-- resources/views/organizations/show.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Organization Details</div>

                <div class="card-body">
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
</div>
@endsection