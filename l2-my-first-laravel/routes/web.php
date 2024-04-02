<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {

    $data = [
        "name" => "Bob",
        "profession" => "Builder",
        "fruit" => [
            "Apples",
            "Oranges",
            "Pears",
            "Pineapples"
        ]
    ];

    return view("homepage", $data);
});
