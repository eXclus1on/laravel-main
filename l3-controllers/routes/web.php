<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\CityController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('homepage');
// });
Route::get('/', [AppController::class, 'homepage']);
Route::get('/cities', [AppController::class, 'getCities']);
Route::get('paginatedCities', [CityController::class, 'getPaginatedCities']);
Route::get('addCity', [CityController::class, 'getAddCity']);
Route::post('addCity', [CityController::class, 'postAddCity']);
