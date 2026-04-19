@extends('layouts.app')

@section('content')
<style>
    .cars-page {
        min-height: 100vh;
        padding: 40px 0 80px;
        background:
            linear-gradient(rgba(9, 18, 35, 0.45), rgba(9, 18, 35, 0.45)),
            url('/images/road-220058_1280.jpg');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }

    .cars-top-bar {
        max-width: 1200px;
        margin: 0 auto 28px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        gap: 16px;
        padding: 0 10px;
    }

    .cars-heading {
        color: white;
    }

    .cars-heading small {
        display: inline-block;
        background: rgba(255,255,255,0.14);
        color: #e2e8f0;
        padding: 8px 14px;
        border-radius: 999px;
        font-size: 14px;
        margin-bottom: 10px;
        backdrop-filter: blur(8px);
        border: 1px solid rgba(255,255,255,0.18);
    }

    .cars-heading h1 {
        margin: 0;
        font-size: 2.6rem;
        font-weight: 800;
        color: #ffffff;
        text-shadow: 0 4px 18px rgba(0,0,0,0.25);
    }

    .cars-heading p {
        margin: 10px 0 0;
        color: rgba(255,255,255,0.88);
        font-size: 1rem;
    }

    .back-home-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        padding: 13px 22px;
        border-radius: 14px;
        text-decoration: none;
        font-weight: 700;
        color: #fff;
        background: rgba(255,255,255,0.14);
        border: 1px solid rgba(255,255,255,0.22);
        backdrop-filter: blur(10px);
        box-shadow: 0 10px 22px rgba(0,0,0,0.18);
        transition: 0.25s ease;
    }

    .back-home-btn:hover {
        transform: translateY(-2px);
        color: #fff;
        background: rgba(255,255,255,0.20);
    }

    .cars-grid {
        max-width: 1200px;
        margin: 0 auto;
    }

    .car-card-custom {
        background: rgba(255,255,255,0.92);
        border: 1px solid rgba(255,255,255,0.60);
        border-radius: 24px;
        overflow: hidden;
        box-shadow: 0 18px 35px rgba(0,0,0,0.18);
        transition: 0.25s ease;
        height: 100%;
    }

    .car-card-custom:hover {
        transform: translateY(-6px);
    }

    .car-image-wrap {
        position: relative;
    }

    .car-image-custom {
        width: 100%;
        height: 240px;
        object-fit: cover;
    }

    .status-badge-custom {
        position: absolute;
        top: 16px;
        right: 16px;
        background: rgba(255,255,255,0.94);
        color: #111827;
        padding: 8px 14px;
        border-radius: 999px;
        font-weight: 600;
        font-size: 14px;
        box-shadow: 0 8px 18px rgba(0,0,0,0.10);
    }

    .card-body-custom {
        padding: 22px 22px 20px;
    }

    .car-name {
        font-size: 1.6rem;
        font-weight: 800;
        color: #111827;
        margin-bottom: 14px;
    }

    .car-info-line {
        font-size: 1rem;
        color: #374151;
        margin-bottom: 8px;
    }

    .car-info-line strong {
        color: #111827;
    }

    .car-actions {
        margin-top: 18px;
        display: flex;
        gap: 12px;
        flex-wrap: wrap;
    }

    .details-btn {
        flex: 1;
        min-width: 150px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        padding: 12px 18px;
        border-radius: 14px;
        text-decoration: none;
        font-weight: 700;
        color: #fff;
        background: linear-gradient(180deg, #3156d3, #2748b3);
        box-shadow: 0 10px 18px rgba(49, 86, 211, 0.25);
        transition: 0.2s ease;
    }

    .details-btn:hover {
        color: #fff;
        transform: translateY(-2px);
    }

    .secondary-btn {
        flex: 1;
        min-width: 150px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        padding: 12px 18px;
        border-radius: 14px;
        text-decoration: none;
        font-weight: 700;
        color: #111827;
        background: #eef2ff;
        transition: 0.2s ease;
    }

    .secondary-btn:hover {
        color: #111827;
        transform: translateY(-2px);
    }

    .empty-box {
        max-width: 900px;
        margin: 30px auto 0;
        background: rgba(255,255,255,0.92);
        border-radius: 24px;
        padding: 40px 24px;
        text-align: center;
        color: #111827;
        box-shadow: 0 18px 35px rgba(0,0,0,0.18);
    }

    @media (max-width: 768px) {
        .cars-page {
            padding: 28px 0 60px;
            background-attachment: scroll;
        }

        .cars-top-bar {
            flex-direction: column;
            align-items: flex-start;
            padding: 0 14px;
        }

        .cars-heading h1 {
            font-size: 2rem;
        }

        .cars-grid {
            padding: 0 14px;
        }

        .car-image-custom {
            height: 220px;
        }

        .car-name {
            font-size: 1.4rem;
        }

        .car-actions {
            flex-direction: column;
        }

        .details-btn,
        .secondary-btn {
            width: 100%;
        }
    }
</style>

<div class="cars-page">
    <div class="container-fluid">

        <div class="cars-top-bar">
            <div class="cars-heading">
                <small>
                    <i class="bi bi-car-front-fill me-2"></i>Car Collection
                </small>
                <h1>Explore Our Cars</h1>
                <p>Browse by brand and discover stylish models with clean details.</p>
            </div>

            <a href="/" class="back-home-btn">
                <i class="bi bi-arrow-left"></i>
                Back to Home
            </a>
        </div>

        @if(count($cars) > 0)
            <div class="cars-grid">
                <div class="row g-4">
                    @foreach($cars as $car)
                        <div class="col-md-6 col-lg-4">
                            <div class="car-card-custom">
                                <div class="car-image-wrap">
                                    <img src="{{ asset($car['image']) }}" class="car-image-custom" alt="{{ $car['name'] }}">

                                    <div class="status-badge-custom">
                                        {{ $car['status'] }}
                                    </div>
                                </div>

                                <div class="card-body-custom">
                                    <h3 class="car-name">{{ $car['name'] }}</h3>

                                    <div class="car-info-line">
                                        <strong>ID:</strong> {{ $car['id'] }}
                                    </div>

                                    <div class="car-info-line">
                                        <strong>Brand:</strong> {{ $car['brand'] }}
                                    </div>

                                    <div class="car-info-line">
                                        <strong>Price:</strong> {{ $car['price'] }} SAR
                                    </div>

                                    <div class="car-info-line">
                                        <strong>Tax:</strong> {{ $car['tax'] }}
                                    </div>

                                    <div class="car-actions">
                                        <a href="#" class="details-btn">
                                            <i class="bi bi-search"></i>
                                            View Details
                                        </a>

                                        <a href="/" class="secondary-btn">
                                            <i class="bi bi-house-door"></i>
                                            Home
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @else
            <div class="empty-box">
                <h3 class="mb-3">No cars found</h3>
                <p class="mb-0">Try selecting another brand or go back to the homepage.</p>
            </div>
        @endif

    </div>
</div>
@endsection