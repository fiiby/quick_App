<!-- resources/views/leads/show.blade.php -->
// use <x-layout>
    @extends('layouts.app')
    @vite('resources/css/app.css')
    @section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Lead Details</div>

                    <div class="card-body">
                        <div>
                            <strong>Name:</strong> {{ $lead->name }}
                        </div>
                        <div>
                            <strong>Email:</strong> {{ $lead->email }}
                        </div>
                        <div>
                            <strong>Phone:</strong> {{ $lead->phone }}
                        </div>
                        <div>
                            <strong>Message:</strong> {{ $lead->message }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection