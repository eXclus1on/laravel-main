<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiRootController extends Controller
{
    public function getApiRoot()
    {
        $response = [
            "status" => "ok",
            "message" => "Hello"
        ];

        return $response;
    }
}
