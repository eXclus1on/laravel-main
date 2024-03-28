<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $data = [
        "name" => "Rodolfo",
        "profession"  => "Developer"
    ];
     return view('homepage', $data);
} );