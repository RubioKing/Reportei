<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class consumirApiController extends Controller
{
    public function index()
    {
        $response = http::get('https://swapi.dev/api/planets/?page=2');
        $responseObj = json_decode($response);
        
        $nome = $responseObj->results[0]->name;

        dd($nome);
        
    }
};
