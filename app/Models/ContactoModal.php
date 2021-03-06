<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ContactoModal extends Model
{
    use HasFactory;

    function enviarEmail($nombreCompleto, $correo, $mensaje){
        $query = DB::table('email')->insert(
            array(
                'nombre' => $nombreCompleto,
                'correo' => $correo,
                'mensaje' => $mensaje
            )
        );
        return $query;
    }
}
