<?php

namespace App\Http\Controllers;

use App\Models\PedidosModel;
use Illuminate\Http\Request;

class PedidosController extends Controller
{
    function realizarPedido(){
        $pedidoModelo = new PedidosModel();
        $direccionUser = $_POST['direccionUser'];
        $bolson = $_POST['bolson'];
        $aDomicilio = $_POST['aDomicilio'];
        $sucursal = $_POST['sucursal'];
        $fechaRetiro = $_POST['fechaRetiro'];

        if(strlen($_POST['nombreUser'])<=20){
            $nombreUser = $_POST['nombreUser'];
        }
        if(strlen($_POST['apellidoUser'])<=20){
            $apellidoUser = $_POST['apellidoUser'];
        }
        if(strpos($_POST['emailUser'], '@')!=false && strpos($_POST['emailUser'], '.')!=false){
            $emailUser = $_POST['emailUser'];
        }

        $pedidoNuevo = $pedidoModelo->hacerPedido($nombreUser, $apellidoUser, $emailUser, $direccionUser, $bolson, $aDomicilio, $sucursal, $fechaRetiro);
        return response($pedidoNuevo);
    }
}
