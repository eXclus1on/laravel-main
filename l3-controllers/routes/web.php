<?php

use App\Http\Controllers\AppController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('homepage');
// });
Route::get('/', [AppController::class, 'homepage']);
Route::get('/cities', [AppController::class, 'getCities']);
