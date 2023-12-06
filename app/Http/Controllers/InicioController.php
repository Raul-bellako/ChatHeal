<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function about(){
        return view ('acerca');
    }
    public function features(){
        return view ('caracteristicas');
    }
    public function contact(){
        return view ('contacto');
    }
    public function inicio(){
        return view ('inicio');
    }
}