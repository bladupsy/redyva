<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <title>Form</title>
</head>
<body>
        <input type="text" name="nombreGG" id="inputNombre" placeholder="nombre"><br>
        <input type="text" name="apellidoGG" id="inputApellido" placeholder="Apellido"><br>
        <input type="email" name="emailGG" id="inputEmail" placeholder="Email"><br>
        <input type="text"name="direccionGG" id="inputDireccion"><br>
        <input type="date" name="fechaGG" id="inputFecha"><br>
        <input type="radio" name="domicilio" id="" value="domicilio" require checked>Domicilio<br>
        <input type="radio" name="domicilio" id="" value="retirar">Retirar<br>
        <div id="div-vacio"></div>
        <button id="btnPedido">Hacer Pedido</button>
<!--!!!!!!!!!!!!!!!!!!!!!!!!!!!! Aca Viene JavaScript (Jquery) !!!!!!!!!!!!!!!!!!!!!!!!!!!!!-->
        <script>
            $(document).ready(function(){
                let nombreUser = $('#inputNombre').val();
                let apellidoUser = $('#inputApellido').val();
                let emailUser = $('#inputEmail').val();
                let direccionUser = $('#inputDireccion').val();
                let fechaUser = $('#inputFecha').val();
                let deliveryUser = $('input:radio[name=domicilio]:checked').val();

                // Al hacer Click en -Retirar- se crea el <select>
                $("input[name=domicilio]").click(function () {  
                    $("#div-vacio").empty();  
                    let deliveryUser = $('input:radio[name=domicilio]:checked').val();
                    if(deliveryUser == "retirar"){
                        $('#div-vacio').append(`
                            <select id="seleccion" name="sucursales" required>
                                <option value="">Seleccione una Sucursal: </option>
                                <option value="Sucursal1">Sucursal 1 </option>
                                <option value="Sucursal2">Sucursal 2 </option>
                                <option value="Sucursal3">Sucursal 3 </option>
                            </select>
                        `)
                    }
                 });
                 
                 // Prueba de funcionamiento del <Select>
                $("#btnPedido").click(function(){
                    let seleccionado = $('select[id=seleccion]').val();
                    if(seleccionado == ""){
                        alert("Debe seleccionar una Sucursal")
                        console.log($('#inputFecha').val());
                    }
                })  
            })
        </script>
</body>
</html>