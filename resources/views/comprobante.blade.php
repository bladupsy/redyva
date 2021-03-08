<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}" type="text/css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <title>Redyva</title>
</head>
<body>
    <h1>Comprobante Pedido</h1>
    <b>Posadas</b>
    <div id="nombre-direccion">
        <h2><?php echo $pdfNombre." ".$pdfApellido ?> | <?php echo $pdfDireccion ?></h2>
    </div>
    <b>Sucursal: <?php echo $pdfSucursal ?></b>
    <div id="titulos">
        <div class="titulos-contenido">Bolsón: <?php echo $pdfBolson ?></div>
        <div class="titulos-contenido">Productos: </div>
        <div class="titulos-contenido">Precio: <?php if($pdfBolson == "verde" || $pdfBolson == "citrus"){echo "$250";} else{echo "$300";}
        ?></div>
    </div>
    <div id="contenido">
        <div id="contenido-contenido"><p> </p></div>
        <div id="contenido-contenido"><p> </p></div>
        <div id="contenido-contenido"><p> </p></div>
        <div id="contenido-contenido"><p> </p></div>
    </div>
    <h2 class="logo">RedYvá</h2>
</body>
</html>