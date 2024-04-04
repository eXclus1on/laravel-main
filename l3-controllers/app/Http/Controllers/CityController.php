<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CityController extends Controller
{
   public function getCities() 
   {
    $page = isset($_GET["page"])?$_GET["page"]:1;
    $offset = 20 *$page-20;

    $params = [$offset];

    $cities =  DB::select('SELECT * FROM city LIMIT 20 OFFSET ?', $params);

    $citiesTotal = DB::select ('SELECT COUNT(*) as total FROM city');
    $total = $citiesTotal [0]->total;

    $data = [
        'cities' =>  $cities,
        'page' => $page,
        'total' => $total
    ];
    return view( "paginatedCities", $data );
   }
 };
