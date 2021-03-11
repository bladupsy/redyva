<?php

namespace App\Http\Controllers;

use App\Models\PedidosModel;
use Illuminate\Http\Request;

class PedidosController extends Controller
{
    // método generar pedido en la BD
    function realizarPedido(){
        // Errores 
        $erroresValidacion = [];
        $pedidoModelo = new PedidosModel();
        $direccionUser = $_POST['inputDireccion'];
        $bolson = $_POST['variableBolson'];
        $aDomicilio = $_POST['retirarUser'];
        $sucursal = $_POST['sucursalUser'];

        if(strlen($_POST['inputNombre'])<=45){
            $nombreUser = $_POST['inputNombre'];
        } else{
            $erroresValidacion[] = "El nombre No Puede superar los 45 caracteres";
        }

        if(strlen($_POST['inputApellido'])<=50){
            $apellidoUser = $_POST['inputApellido'];
        } else{
            $erroresValidacion[] = "El Apellido No Puede superar los 50 caracteres";
        }

        if(strpos($_POST['inputEmail'], '@')!=false && strpos($_POST['inputEmail'], '.')!=false){
            $emailUser = $_POST['inputEmail'];
        } else{
            $erroresValidacion[] = "La dirección de correo ingresado NO ES VÁLIDO";
        }

        $pedidoNuevo = $pedidoModelo->hacerPedido($nombreUser, $apellidoUser, $emailUser, $direccionUser, $bolson, $aDomicilio, $sucursal);
        return response($erroresValidacion);
    }
}
