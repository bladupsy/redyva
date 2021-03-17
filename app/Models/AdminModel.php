<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class AdminModel extends Model
{
    use HasFactory;

    function buscarRegistro($identificador, $cantMax, $offset){

        $id = (int)$identificador;
        
        $consulta = DB::table('pedidos')
            ->where('id_bolson', $id)
            ->skip($offset)->take($cantMax)->get();

        return $consulta;
    }

    function contarRegistros($identificador){
        
        $cantidadTotal = DB::table('pedidos')->select(DB::raw('count(*) as idpedidos'))
                                             ->where('id_bolson', $identificador)
                                             ->get();
        return $cantidadTotal;
    }
}
