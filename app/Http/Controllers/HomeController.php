<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $response = http::get('https://swapi.dev/api/planets/');
        $responseObj = json_decode($response);

        $result = $responseObj->results;
        //dd($result);  
        return view('home')->with(['planetas' => $result]);
        
    }
}
