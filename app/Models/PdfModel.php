<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PdfModel extends Model
{
    use HasFactory;

    function buscarSucursal($pdfSucursal){
        $nombreSucursal = DB::table('sucursales')->select('direccion_sucursal')->where('idsucursales', $pdfSucursal);
        $nombreSucursal->get();
        return $nombreSucursal;
    }
}
