<?php

namespace App\Http\Controllers;

use App\Models\AdminModel;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    function dashboard(){
        return view('dashboard');
    }

    function listaPedidos(){
        $id = $_GET['identificador'];
        $pag = $_GET['pag'];
        return view('lista-pedidos')
                ->with('id', $id)
                ->with('pag', $pag);
    }

    function listar(){

        // Traigo datos para hacer las consultas
        $identificador = $_GET['id'];
        $paginaNum = $_GET['paginaNumero'];
        $paginaNumero = (int)$paginaNum;
        $maximo = isset($_GET['max']);

        $cantMax = 10;
        $offset = ($paginaNumero - 1) * $cantMax ;
        $adminQuery = new AdminModel();
        $consulta = $adminQuery->buscarRegistro($identificador, $cantMax, $offset);

        return response($consulta);
    }

    function cantidad(){

        $identificador = $_GET['id'];

         // Instancio Modal para ejecturar el metodo contar
         $cantidadTotal = new AdminModel();
         $registros = $cantidadTotal->contarRegistros($identificador);
        
         return $registros;
    }
}
