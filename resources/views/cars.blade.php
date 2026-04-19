@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="text-center mb-4">Cars List</h1>

    <div class="row">
        @foreach($cars as $car)
        <div class="col-md-4">
            <div class="card mb-4 shadow">
                <img src="{{ asset($car['image']) }}" class="card-img-top" alt="car" style="height: 220px; object-fit: cover;">

                <div class="card-body">
                    <h5 class="card-title">{{ $car['name'] }}</h5>

                    <p class="card-text">
                        <strong>ID:</strong> {{ $car['id'] }} <br>
                        <strong>Brand:</strong> {{ $car['brand'] }} <br>
                        <strong>Price:</strong> {{ $car['price'] }} SAR <br>
                        <strong>Tax:</strong> {{ $car['tax'] }} <br>
                        <strong>Status:</strong>
                        <span class="badge bg-{{ $car['status'] == 'Available' ? 'success' : 'danger' }}">
                            {{ $car['status'] }}
                        </span>
                    </p>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <div class="text-center">
        <a href="/" class="btn btn-secondary">Back</a>
    </div>
</div>
@endsection