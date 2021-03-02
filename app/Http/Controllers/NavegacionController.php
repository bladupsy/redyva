<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavegacionController extends Controller
{
    function quienes(){
        return view('quienes');
    }

    function hacen(){
        return view('hacen');
    }

    function puntos(){
        return view('puntos');
    }

    function producto(){
        return view('producto');
    }

    function index(){
        return view('index');
    }
}
