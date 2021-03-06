<?php

namespace App\Http\Controllers;

use App\Models\ContactoModal;
use Illuminate\Http\Request;

class ContactoController extends Controller
{
    function contactar(){
        $errores = null;
        
        if(strpos($_POST['correo'], '@')!=false && strpos($_POST['correo'], '.')!=false){
            $correo = $_POST['correo'];
        } else{
            $errores[] = "No es un Email Válido";
        }

        if(strlen($_POST['nombreCompleto'])<=50 && stripos($_POST['nombreCompleto'], 'DELETE')!=false && stripos($_POST['nombreCompleto'], 'SELECT')!=false){
            $nombreCompleto = $_POST['nombreCompleto'];
        }
        else{
            $errores[] = "Supera el Máximo de 50 caracteres";
        }

        if(strlen($_POST['mensaje'])<=144 && stripos($_POST['mensaje'], 'DELETE')!=false && stripos($_POST['mensaje'], 'SELECT')!=false){
            $mensaje = $_POST['mensaje'];
        }else{
            $errores[] = "Supera el Máximo de 144 caracteres o No es un Mensaje Valido";
        }

        $contactoModelo = new ContactoModal();
        $contactoNuevo = $contactoModelo->enviarEmail($nombreCompleto, $correo, $mensaje);
        return response($errores);
    }
}
