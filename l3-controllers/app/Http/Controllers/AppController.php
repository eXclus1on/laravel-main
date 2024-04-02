<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    public function  homepage() {
        $data = [
            'title' => 'Welcome to my website! Enjoy!',
            'movies' => [
                'The Shawshank Redemption',
                'The Godfather',
                'Pulp Fiction',
                'Fight Club',
            ]
        ];
        return view('homepage', $data);
    }
}

//php artisan make:controller App/AppController --resource
//Ele criou um controller chamado "AppController" e aqui estão as funções que ele gerou.

//public function index() {} // Mostra todos os dados da tabela (index)

//public function create() {} // Abre formulário para adicionar novos registros (create)