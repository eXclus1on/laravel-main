<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use mysqli;
use stdClass;

class CityController extends Controller
{
    public function getPaginatedCities()
    {
        // $cities = [
        //     (object)[
        //         'name' => 'Porto',
        //         'country' => 'PRT',
        //         'pop' => '100'
        //     ],
        //     (object)[
        //         'name' => 'Lisboa',
        //         'country' => 'PRT',
        //         'pop' => '200'
        //     ],
        //     (object)[
        //         'name' => 'Paris',
        //         'country' => 'FRA',
        //         'pop' => '500'
        //     ],
        //     (object)[
        //         'name' => 'London',
        //         'country' => 'GBR',
        //         'pop' => '800'
        //     ]
        // ];

        $result = DB::select('SELECT COUNT(*) AS cityTotal FROM city');
        $row = $result[0];
        $cityTotal = $row->cityTotal;

        $num_rows = isset($_GET['num_rows']) ? $_GET['num_rows'] : 20;
        $page = isset($_GET['page']) ? $_GET['page'] : 1;

        $lastPage = ceil($cityTotal / $num_rows);


        if (!is_numeric($page) or $page < 1 or $page > $lastPage) {
            return view("invalidPage");
        }

        $offset = ($page - 1) * $num_rows;

        $bindings = [$num_rows, $offset];
        $cities = DB::select("SELECT * FROM city LIMIT ? OFFSET ?", $bindings);

        $data = [
            'cities' => $cities,
            'page' => $page,
            'lastPage' => $lastPage,
            'num_rows' => $num_rows
        ];

        return view("paginatedCities", $data);
    }

    public function getAddCity()
    {
        $success = isset($_GET["success"]);
        $fail = isset($_GET["fail"]);

        $data = [
            "success" => $success,
            "fail" => $fail
        ];

        return view("addCity", $data);
    }

    public function postAddCity()
    {
        // Inserir na BD;
        $bindings = ["Porto", "teste", 123, "PRT"];
        $success = DB::insert("INSERT INTO city (ID, Name, District, Population, CountryCode) VALUES (NULL, ?, ?, ?, ?)", $bindings);

        // Feito
        if ($success) {
            return redirect("/addCity?success");
        } else {
            return redirect("/addCity?fail");
        }
    }
}
