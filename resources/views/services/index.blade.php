@extends('layouts.dashboard')
@section('title', 'My Services')
@section('content')
    <style>
        .card {
            margin-bottom: 20px;
            position: relative;
            /* To position the edit button */
        }

        .edit-button {
            position: absolute;
            top: 10px;
            right: 10px;
        }
    </style>
    <div class="container">
        <div class="row">
            <a href="{{ route('services.create') }}" class="btn btn-sm btn-outline-primary btn-lg">Add New Service</a>
            @foreach ($services as $service)
                <div class="col-md-4">
                    <div class="card">
                        <a href="{{ route('services.edit', $service->id) }}"
                            class="btn btn-sm btn-outline-secondary edit-button">Edit</a>
                        <img src="https://via.placeholder.com/300x200/FFC107/000000?Text=Product+1" class="card-img-top"
                            alt="Product 1">
                        <div class="card-body">
                            <h5 class="card-title">{{ $service->name }}</h5>
                            <p class="card-text">{{ $service->description }}</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <span class="badge bg-warning text-dark">Rating: 4.5/5</span>
                                </div>
                                <h6 class="card-subtitle mb-2 text-muted">GHS {{ $service->amount }}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
