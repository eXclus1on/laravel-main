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

// 1 - criar uma rota `paginatedCities` e um CityController que mostre a tabela de cidades
// 2 - Acrescentar um link para ir para a primeira pagina, e um link para ir para a ultima
// 3 - Mostrar quantas paginas existem no total
// 4 - Desactivar os links, quando nao fazem sentido, por exemplo na pagina 1 na vamos para tras
// 5 - Ter um select para saber quantas cidades vao ser mostradas por pagina
// 6 - (BONUS) Mostrar links para saltar directamente para uma pagina