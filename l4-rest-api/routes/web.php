<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/api', function () {

    $response = [
        "status" => "ok",
        "message" => "Hello"
    ];

    return $response;
});

Route::get('/api/cities', function () {

    $result = DB::select("SELECT COUNT(*) AS total FROM city");
    $onlyRow = $result[0];
    $total = $onlyRow->total;

    $cities = DB::select("SELECT * FROM city");

    $response = [
        "description" => "A list of cities",
        "count" => $total,
        "data" => $cities
    ];

    return $response;
});
