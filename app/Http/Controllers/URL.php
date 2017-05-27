<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class URL extends Controller
{    

    public function generar(){
        return view('MisVistas/urlnueva'); 

    }
}
