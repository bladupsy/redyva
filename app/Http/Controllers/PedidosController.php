<?php

namespace App\Http\Controllers;

use App\Models\PedidosModel;
use Illuminate\Http\Request;

class PedidosController extends Controller
{
    function realizarPedido(){
        $pedidoModelo = new PedidosModel();
        $nombreUser = $_POST['nombreUser'];
        $apellidoUser = $_POST['apellidoUser'];
        $emailUser = $_POST['emailUser'];
        $direccionUser = $_POST['direccionUser'];
        $bolson = $_POST['bolson'];
        $aDomicilio = $_POST['aDomicilio'];
        $sucursal = $_POST['sucursal'];
        $fechaRetiro = $_POST['fechaRetiro'];

        $pedidoNuevo = $pedidoModelo->hacerPedido($nombreUser, $apellidoUser, $emailUser, $direccionUser, $bolson, $aDomicilio, $sucursal, $fechaRetiro);
        return response($pedidoNuevo);
    }
}
