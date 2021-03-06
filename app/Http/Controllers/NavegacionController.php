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
    function pesado(){
        return view('pesado');
    }
    function citrus(){
        return view('citrus');
    }
    function verde(){
        return view('verde');
    }
    function pedirPesado(){
        return view('pedir-pesado');
    }
    function pedirCitrus(){
        return view('pedir-citrus');
    }
    function pedirVerde(){
        return view('pedir-verde');
    }
}
