<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PedidosModel extends Model
{
    use HasFactory;

    function hacerPedido($nombreUser, $apellidoUser, $emailUser, $direccionUser, $bolson, $aDomicilio, $sucursal){
        $userConsulta = DB::table('pedidos')->insert(
            array('nombre'=>$nombreUser, 'apellido'=>$apellidoUser, 'email'=>$emailUser, 'direccion'=>$direccionUser, 'bolson'=>$bolson, 'aDomicilio'=>$aDomicilio, 'sucursal'=>$sucursal)
        );
        return $userConsulta;
    }
}