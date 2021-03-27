<?php

namespace App\Http\Controllers;

use App\Models\LoginModel;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    function loginAdmin(){
        return view('admin');
    }

    // login
    function loguear(){
        $usuar = isset($_POST['usuario']);
        $contrasena = isset($_POST['contrasena']);

        $log = new LoginModel();
        $log->verifyUser($usuar, $contrasena);

        return $log;
    }
}
