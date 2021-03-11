<?php

namespace App\Http\Controllers;

use App\Models\PdfModel;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;

class PdfController extends Controller
{
    // Método para generar PDF con los Datos Ingresado por el User
    function pdfGenerate(){

        // Instancio PdfModel para usar el Método
        $modelPdf = new PdfModel();

        $name = $_GET['name'];
        $lastname = $_GET['lastname'];
        $email = $_GET['email'];
        $adress = $_GET['adress'];
        $sucursalname = $_GET['sucursalname'];

        if($_GET['bag'] == "1"){
            $bag = "Pesado";
        } else if($_GET['bag'] == "2"){
            $bag = "Citrus";
        } else{
            $bag = "Verde";
        }

        // Cambio la variable de String a Int
        $sucursal = (int)$sucursalname;
        $sucursal = $modelPdf->buscarSucursal($sucursalname);

        $pdf = PDF::loadView('comprobante', compact('name'));
        return $pdf->stream('comprobante.pdf');
    }
}
