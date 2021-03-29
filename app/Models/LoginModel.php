<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class LoginModel extends Model
{
    use HasFactory;

    // Verifica la exitencia del usuario y la contraseña
    function verifyUser($usuar, $contrasena){
    
        // Verifico si exite
        $verify = DB::table('users')
                    ->select('username', 'password')
                    ->where('username', $usuar)
                    ->where('password', $contrasena)
                    ->get();
        return $verify;
    }
}
