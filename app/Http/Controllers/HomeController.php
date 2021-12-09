<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //definimos el metodo

    public function __invoke(){
        return view('home'); 
    }
}
