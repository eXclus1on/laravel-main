<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AppController extends Controller
{
    public function  homepage() {

        $name = isset ($_GET['name']) ? $_GET['name'] : '';
        $name = '%' . $name . '%';

        $params = [
            $name
        ];

        $cities = DB::select('SELECT * FROM city WHERE name LIKE ?', $params);


        $data = [
            'title' => 'Welcome to my website! Enjoy!',
            'movies' => [
                'The Shawshank Redemption',
                'The Godfather',
                'Pulp Fiction',
                'Fight Club',
            ],
            'cities' => $cities 
        ];
        return view('homepage', $data);
    }
    public function getCities(){
        return view('cities');
    }
    
}

//php artisan make:controller App/AppController --resource
//Ele criou um controller chamado "AppController" e aqui estão as funções que ele gerou.

//public function index() {} // Mostra todos os dados da tabela (index)

//public function create() {} // Abre formulário para adicionar novos registros (create)
