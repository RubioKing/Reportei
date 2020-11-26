<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class detalhesController extends Controller
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
        $planetas = $responseObj->results;
        dd($responseObj);  
        return view('detalhes')->with(['planetas' => $planetas]);
    }

    public function index2($id)
    {   
        $response = http::get("https://swapi.dev/api/planets/{$id}");
        $responseObj = json_decode($response);
        $planetas = $responseObj;
        //dd($responseObj);  
        return view('detalhes')->with(['planetas' => $planetas]);
    }
}



?>