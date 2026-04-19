
<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
use App\Http\Controllers\CarController;

Route::get('/', function () {
    return view('land_page');
});

Route::get('/cars', [CarController::class, 'ListCar']);
Route::get('/brand/{brand}', [CarController::class, 'CarsByBrand']);