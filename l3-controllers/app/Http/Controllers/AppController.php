<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AppController extends Controller
{
    public function homepage()
    {
        $name = isset($_GET['name']) ? $_GET['name'] : ''; // Porto
        $name = '%' . $name . '%'; // %Porto%

        $params = [
            $name
        ];
        $cities = DB::select('SELECT * FROM city WHERE Name LIKE ?', $params);

        $data = [
            'title' => 'Welcome to my website! Enjoy!',
            'movies' => [
                'LOTR',
                'Matrix',
                'Barbie',
                'Harry Potter and the chamber of secrets'
            ],
            'cities' => $cities
        ];

        return view('homepage', $data);
    }

    public function getCities()
    {
        $cityUserInput = isset($_GET['city']) ? $_GET['city'] : '';
        $cityQueryParam = '%' . $cityUserInput . '%';

        $params = [$cityQueryParam];
        $cities = DB::select('SELECT * FROM city WHERE Name LIKE ?', $params);

        $data = [
            'search' => $cityUserInput,
            'cities' => $cities
        ];

        return view('cities', $data);
    }
}

// criei este fx no terminal com o seguinte comando:
// php artisan make:controller AppController