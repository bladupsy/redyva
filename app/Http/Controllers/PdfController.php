<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;

class PdfController extends Controller
{
    // Método para generar PDF con los Datos Ingresado por el User
    function pdfGenerate(){
        $pdfNombre = $_GET['nombre'];
        $pdfApellido = $_GET['apellido'];
        $pdfEmail = $_GET['email'];
        $pdfDireccion = $_GET['direccion'];
        $pdfBolson = $_GET['bolson'];
        $pdfSucursal = $_GET['sucursal'];
        $pdfAdomicilio = $_GET['domicilio'];

        $pdf = PDF::loadView('comprobante', compact('pdfNombre', 'pdfApellido', 'pdfEmail', 'pdfDireccion', 'pdfBolson', 'pdfSucursal', 'pdfAdomicilio'));
        return $pdf->stream('${pdfApellido}-comprobante.pdf');
    }
}
