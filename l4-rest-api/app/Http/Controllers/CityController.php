<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CityController extends Controller
{
    public function getCities()
    {

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
    }

    public function getCityById(Request $request, string $id)
    {

        if (!is_numeric($id)) {
            return [
                "status" => "failed",
                "message" => "invalid id"
            ];
        }

        $cities = DB::select("SELECT * FROM city WHERE Id = ?", [$id]);

        if (count($cities) == 0) {
            return "Id out of range";
        }

        $response = $cities[0];

        return $response;
    }

    public function postCities(Request $request)
    {
        $name = $request->input('name', 'default');
        $district = $request->input('district', 'default');
        $population = $request->input('population', 0);
        $countryCode = $request->input('countryCode', 'PRT');

        $result = DB::insert("INSERT INTO City VALUES (NULL, ?, ?, ?, ?)", [$name, $countryCode, $district, $population]);

        if ($result) {
            $data = [
                "status" => "success",
                "insertId" => DB::getPdo()->lastInsertId()
            ];

            return $data;
        } else {
            return "No rows affected";
        }
    }
}
