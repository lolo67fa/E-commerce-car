<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarController extends Controller
{
    public function Index($brand)
    {
        $brands = ['Mazda', 'Kia', 'Hyundai', 'Toyota'];

        $filteredBrands = array_filter($brands, function ($item) use ($brand) {
            return strtolower($item) == strtolower($brand);
        });

        return view('land_page', compact('filteredBrands'));
    }

    public function ListCar()
    {
        $cars = [
            [
                'id' => 1,
                'name' => 'Toyota Camry',
                'brand' => 'Toyota',
                'price' => 120000,
                'tax' => '15%',
                'status' => 'Available',
                'image' => 'images/toyota.webp'
            ],
            [
                'id' => 2,
                'name' => 'Kia K5',
                'brand' => 'Kia',
                'price' => 110000,
                'tax' => '15%',
                'status' => 'Available',
                'image' => 'images/2025_kia5.jpg'
            ],
            [
                'id' => 3,
                'name' => 'Hyundai Elantra',
                'brand' => 'Hyundai',
                'price' => 95000,
                'tax' => '15%',
                'status' => 'Available',
                'image' => 'images/elantra_n_tech_fb-d.jpg'
            ],
            [
                'id' => 4,
                'name' => 'Mazda 6',
                'brand' => 'Mazda',
                'price' => 105000,
                'tax' => '15%',
                'status' => 'Available',
                'image' => 'images/mazda7.webp'
            ]
        ];

        return view('cars', compact('cars'));
    }

    public function CarsByBrand($brand)
    {
        $cars = [
            [
                'id' => 1,
                'name' => 'Toyota Camry',
                'brand' => 'Toyota',
                'price' => 120000,
                'tax' => '15%',
                'status' => 'Available',
                'image' => 'images/toyota.webp'
            ],
            [
                'id' => 2,
                'name' => 'Kia K5',
                'brand' => 'Kia',
                'price' => 110000,
                'tax' => '15%',
                'status' => 'Available',
                'image' => 'images/2025_kia5.jpg'
            ],
            [
                'id' => 3,
                'name' => 'Hyundai Elantra',
                'brand' => 'Hyundai',
                'price' => 95000,
                'tax' => '15%',
                'status' => 'Available',
                'image' => 'images/elantra_n_tech_fb-d.jpg'
            ],
            [
                'id' => 4,
                'name' => 'Mazda 6',
                'brand' => 'Mazda',
                'price' => 105000,
                'tax' => '15%',
                'status' => 'Available',
                'image' => 'images/mazda7.webp'
            ]
        ];

        $cars = array_filter($cars, function ($car) use ($brand) {
            return strtolower($car['brand']) == strtolower($brand);
        });

        return view('cars', compact('cars'));
    }
}