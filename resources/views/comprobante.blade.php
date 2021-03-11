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
    <b>{{$_GET['name']}} {{$_GET['lastname']}}</b> <b>|</b> <b>{{$_GET['adress']}}</b>
    </div>
    <b>Sucursal: {{$_GET['sucursalname']}}</b>
    <div id="titulos">
        <div class="titulos-contenido">Bolsón: <b> <?php if($_GET['bag'] == "1"){echo "Pesado";} else if($_GET['bag'] == "2"){echo "Citrus";} else{echo "Verde";} ?> </b></div>
        <div class="titulos-contenido">Productos: </div>
        <div class="titulos-contenido">Precio: <?php if($_GET['bag'] == "2" || $_GET['bag'] == "3"){echo "$250";} else{echo "$300";}
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

<script>
    // Este Codigo Es de Jquery

    // $("input[name=domicilio]").click(function(){
    //     $("#div-vacio").empty();
    //     deliveryUser = $('input:radio[name=domicilio]:checked').val();
    //     if (deliveryUser == "retirar") {
    //         $('#div-vacio').append(`
    //         <select id="seleccion" name="sucursales" required>
    //             <option value="">Seleccione una Sucursal: </option>
    //             <option value="1">Sucursal 1 </option>
    //             <option value="2">Sucursal 2 </option>
    //             <option value="3">Sucursal 3 </option>
    //             <option value="4">Sucursal 4 </option>
    //             <option value="5">Sucursal 5 </option>
    //             <option value="6">Sucursal 6 </option>
    //             <option value="7">Sucursal 7 </option>
    //             <option value="8">Sucursal 8 </option>
    //             <option value="9">Sucursal 9 </option>
    //             <option value="10">Sucursal 10 </option>
    //             <option value="11>Sucursal 11 </option>
    //             <option value="12">Sucursal 12 </option>
    //             <option value="13">Sucursal 13 </option>
    //             <option value="14">Sucursal 14 </option>
    //             <option value="15">Sucursal 15 </option>
    //             <option value="16">Sucursal 16 </option>
    //         </select>
    //          seleccionado = $('select[id=seleccion]').val();
    //     `)
    //     }
    // });
    

        // Esto iba dentro de la funcion principal CLICK

    // aca iba seleccionado = $('select[id=seleccion]').val();
    // if(seleccionado == "" || seleccionado == 0 || seleccionado == NaN || seleccionado == undefined && deliveryUser == "retirar"){
    //     if(seleccionado == "" || seleccionado == 0 || seleccionado == NaN || seleccionado == undefined && deliveryUser == "domicilio"){
    //         seleccionado = 0;
    //     } else {
    //         alert("Si no quiere Delivery, Necesita seleccionar una Sucursal");
    //     }
    // } else {
    //      seleccionado = parseInt(seleccionado);  // Paso de String a Int
    // }

</script>
<!-- <h1>Comprobante Pedido</h1>
    <b>Posadas</b>
    <div id="nombre-direccion">
        <?php// echo "<strong> . $nombre . , . $apellido .</strong> | <p> . $direccion .</p>" ?>
    </div>
    <?php// echo "<b>Sucursal: . $sucursal .</b>" ?>
    <div id="titulos">
        <div class="titulos-contenido">Bolsón: <b> <?php// if($bolson == "1"){echo "Pesado";} else if($bolson == "2"){echo "Citrus";} else{echo "Verde";} ?> </b></div>
        <div class="titulos-contenido">Productos: </div>
        <div class="titulos-contenido">Precio: <?php// if($bolson == "2" || $bolson == "3"){echo "$250";} else{echo "$300";}
        ?></div>
    </div>
    <div id="contenido">
        <div id="contenido-contenido"><p> </p></div>
        <div id="contenido-contenido"><p> </p></div>
        <div id="contenido-contenido"><p> </p></div>
        <div id="contenido-contenido"><p> </p></div>
    </div>
    <h2 class="logo">RedYvá</h2>