<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;

class PdfController extends Controller
{
    function generarPdf(){
        $nom = $_GET['name'];
        $ape = $_GET['lastname'];
        $dire = $_GET['adress'];
        $sucu = $_GET['sucursalname'];
        $bol = $_GET['bag'];

        $pdf = PDF::loadview('pdf', compact('nom', 'ape', 'dire', 'sucu', 'bol'));
        return $pdf->stream('comprobante.pdf');
    }
}
