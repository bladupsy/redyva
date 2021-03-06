<?php

namespace App\Http\Controllers;

use App\Models\PedidosModel;
use Illuminate\Http\Request;

class PedidosController extends Controller
{
    // método generar pedido en la BD
    function realizarPedido(){
        // Errores 
        $erroresValidacion = null;
        $pedidoModelo = new PedidosModel();
        $direccionUser = $_POST['direccionUser'];
        $bolson = $_POST['bolson'];
        $aDomicilio = $_POST['aDomicilio'];
        $sucursal = $_POST['sucursal'];

        if(strlen($_POST['nombreUser'])<=25){
            $nombreUser = $_POST['nombreUser'];
        } else{
            $erroresValidacion[] = "El nombre No Puede superar los 25 caracteres";
        }

        if(strlen($_POST['apellidoUser'])<=25){
            $apellidoUser = $_POST['apellidoUser'];
        } else{
            $erroresValidacion[] = "El Apellido No Puede superar los 25 caracteres";
        }

        if(strpos($_POST['emailUser'], '@')!=false && strpos($_POST['emailUser'], '.')!=false){
            $emailUser = $_POST['emailUser'];
        } else{
            $erroresValidacion[] = "La dirección de correo ingresado NO ES VÁLIDO";
        }

        $pedidoNuevo = $pedidoModelo->hacerPedido($nombreUser, $apellidoUser, $emailUser, $direccionUser, $bolson, $aDomicilio, $sucursal);
        return response($erroresValidacion);
    }
}
