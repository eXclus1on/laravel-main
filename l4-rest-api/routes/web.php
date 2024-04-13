<?php

use App\Http\Controllers\ApiRootController;
use App\Http\Controllers\CityController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/api', [ApiRootController::class, 'getApiRoot']);

Route::get('/api/cities', [CityController::class, 'getCities']);
Route::get('/api/cities/{id}/', [CityController::class, 'getCityById']);
Route::post('/api/cities', [CityController::class, 'postCities']);
Route::put('/api/cities/{id}', [CityController::class, '']);
Route::delete('/api/cities/{id}', [CityController::class, '']);

// 1 - Criar o controlador para a put Route e modificar o valor de uma cidade
// 2 - Criar o controlador para a delete Route e apagar a cidade
// 3 - Acrescentar a capacidade de busca ao GET /api/cities
//         EX: /api/cities/?search=lis
