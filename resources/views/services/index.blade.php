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
            <div class="col-md-4">
                <div class="card">
                    <button class="btn btn-sm btn-outline-secondary edit-button">Edit</button>
                    <img src="https://via.placeholder.com/300x200/FFC107/000000?Text=Product+1" class="card-img-top"
                        alt="Product 1">
                    <div class="card-body">
                        <h5 class="card-title">Amazing Gadget X</h5>
                        <p class="card-text">This is a brief description of the amazing features and benefits of Gadget
                            X.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <span class="badge bg-warning text-dark">Rating: 4.5/5</span>
                            </div>
                            <h6 class="card-subtitle mb-2 text-muted">$49.99</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <button class="btn btn-sm btn-outline-secondary edit-button">Edit</button>
                    <img src="https://via.placeholder.com/300x200/28A745/FFFFFF?Text=Product+2" class="card-img-top"
                        alt="Product 2">
                    <div class="card-body">
                        <h5 class="card-title">Premium Service Y</h5>
                        <p class="card-text">A detailed explanation of the high-quality service Y and what it offers to
                            customers.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <span class="badge bg-success">Rating: 4.8/5</span>
                            </div>
                            <h6 class="card-subtitle mb-2 text-muted">$99.00</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <button class="btn btn-sm btn-outline-secondary edit-button">Edit</button>
                    <img src="https://via.placeholder.com/300x200/007BFF/FFFFFF?Text=Product+3" class="card-img-top"
                        alt="Product 3">
                    <div class="card-body">
                        <h5 class="card-title">Essential Item Z</h5>
                        <p class="card-text">Learn more about the essential features and why Item Z is a must-have for
                            everyone.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <span class="badge bg-primary">Rating: 4.2/5</span>
                            </div>
                            <h6 class="card-subtitle mb-2 text-muted">$19.50</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
