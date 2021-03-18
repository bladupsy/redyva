<?php $idbolson = $_GET['bolson'];?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}" type="text/css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <title>Redyva</title>
    <style>
        .fondo-inicio {
            position: relative;
            background-image: url("{{ asset('img/chacra.png') }}");
            background-size: cover;
            padding-top: 200px;
            min-height: 900px;
            z-index: 1;
        }

        .subtitle {
            font-family: 'Montserrat', sans-serif;
            font-size: 20px;
            line-height: 25dpx;
            letter-spacing: -0.03em;
        }

        .card-center {
            z-index: 80;
            margin-top: -180px;
        }

        .line-one {
            display: flex;
            flex-wrap: wrap;
            justify-content: flex-end;
            padding: 0.75rem;
            border-top: 2px solid #e94e1a !important;
            width: 450px;
            border-bottom-right-radius: calc(0.3rem - 1px);
            border-bottom-left-radius: calc(0.3rem - 1px);
        }

        .card-subtitle {
            margin-top: -10px;
            margin-left: 20px;
            margin-right: 20px;
        }

        .formulario {
            margin: auto;
            margin-bottom: 20px;
            margin-left: 20px;
            margin-right: 20px;
            background-color: #F2F2F2 !important;
            min-height: 350px;
            border-radius: 25px;
        }

        .ingreso {
            margin-top: 20px;
            margin-left: 20px;
            margin-right: 10px;
            margin-bottom: 20px;
        }

        .ingreso-2 {
            margin-right: 10px;
            margin-left: 20px;
        }

        .card-title {
            margin-left: 25px;
        }

        .separador {
            padding-left: 150px;
        }

        .datos {
            border: 0;
            border-bottom: 1px solid #000 !important;
            background-color: #F2F2F2 !important;
        }

        .enviar {
            margin-left: 350px;
            margin-top: 20px;
            margin-bottom: 20px;
        }

        .flecha-volver {
            margin-left: 150px;
            color: #878787 !important;
            margin-top: 80px;
        }

        #impresiones {
            font-family: 'Montserrat', sans-serif;
            font-size: 20px;
            line-height: 25px;
            letter-spacing: -0.03em;

        }
    </style>
</head>
<body>
    <div class="container-fluid fondo-inicio">
        <div class="container-sm">
            <div class="flecha-volver">
                <a href="index"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="white" class="bi bi-arrow-left-circle " viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z" />
                    </svg></a>
            </div>
        </div>
        <div class="card card-center mx-auto" style="width:  35rem;">
            <!--mx: margin igual -->
            <div class="formulario">
                <form class="row g-3">
                    <div class="row ingreso">
                        <div class="col">
                            <label for="inputNombre" class="form-label">Nombre</label><br>
                            <input required type="text" name="nombreGG" id="inputNombre" placeholder="Nombre" class="datos">
                        </div>
                        <div class="col">
                            <label for="inputApellido" class="form-label">Apellido</label>
                            <input required type="text" name="apellidoGG" id="inputApellido" placeholder="Apellido" class="datos">
                        </div>
                    </div>
                    <div class="col-12 ingreso">
                        <label for="inputEmail" class="form-label">Correo Electronico</label><br>
                        <input required type="email" name="emailGG" id="inputEmail" placeholder="Email" class="datos" style="width: 430px;">
                    </div>
                    <div class="col-12 ingreso">
                        <label for="inputDirección" class="form-label">Dirección</label><br>
                        <input required type="text" name="direccionGG" placeholder="Ingrese su Dirección" id="inputDireccion" class="datos" style="width: 430px;"><br>
                    </div>
                    <div class="row ingreso-2">
                        <div class="col">
                            <input type="radio" name="domicilio" id="dom" value="domicilio" checked> Envio a domicilio <br>
                        </div>
                        <div class="col">
                            <input type="radio" name="domicilio" id="ret" value="retirar"> Retirar en sucursal <br>
                            <div id="div-vacio"><br></div>
                        </div>
                    </div>
                    <meta name="csrf-token" content="<?php echo csrf_token()?>">
                    <div class="enviar">
                        <a id="btnPedido" class="btn btn-orange text-light rounded-pill"  href="#">Hacer Pedido</a>
                    </div>
                </form>
            </div>
        </div>
        <script src="{{asset('js/app.js')}}" type="text/javascript"></script>
</body>
    <!--!!!! Aca Viene JavaScript (Jquery) !!!!-->
    <script>
        $(document).ready(function(){

            let seleccionado = 0;
            let deliveryUser = "domicilio";

            // let deliveryUser = $('input:radio[name=domicilio]:checked').val();
            // Al hacer Click en -Retirar- se crea el <select>

            $('#ret').click(function(){
                $("#div-vacio").empty();
                $('#div-vacio').append(`
                    <select id="seleccion" name="sucursales" required>
                        <option value="" selected >Seleccione una Sucursal: </option>
                        <option value="1">Sucursal 1 </option>
                        <option value="2">Sucursal 2 </option>
                        <option value="3">Sucursal 3 </option>
                        <option value="4">Sucursal 4 </option>
                        <option value="5">Sucursal 5 </option>
                        <option value="6">Sucursal 6 </option>
                        <option value="7">Sucursal 7 </option>
                        <option value="8">Sucursal 8 </option>
                        <option value="9">Sucursal 9 </option>
                        <option value="10">Sucursal 10 </option>
                        <option value="11>Sucursal 11 </option>
                        <option value="12">Sucursal 12 </option>
                        <option value="13">Sucursal 13 </option>
                        <option value="14">Sucursal 14 </option>
                        <option value="15">Sucursal 15 </option>
                        <option value="16">Sucursal 16 </option>
                    </select>
                    `);
                deliveryUser = "retirar";
                // seleccionado = $('select[id=seleccion]').val();                
                $('#seleccion').change(function(){
                    seleccionado = $(this).val();
                    if(seleccionado != ""){
                        seleccionado = parseInt(seleccionado);
                    } else{
                        alert("Si desea retirar el bolson, debe Seleccionar una Sucursal")
                    }
                    // Pruebas de Funcionmiento de <select>
                    // console.log(seleccionado);
                    // console.log(typeof(seleccionado));
                    // console.log(deliveryUser);
                });
            });

            $('#dom').click(function(){
                $("#div-vacio").empty();
                seleccionado = 0;
                deliveryUser = "domicilio";
                // los CONSOLE son Prueba Funcionamiento
                console.log(seleccionado);
                console.log(deliveryUser);
            });

            // Validar Fomulario si estan vacios
                $('#inputNombre').focusout(function(){
                    let inputN = $('#inputNombre').val();
                    if(inputN == null || inputN.length == 0 || /^\s+$/.test(inputN)){
                    $('#inputNombre').css("outline","2px solid red");
                    $('#inputNombre').css("transition","outline .2s");
                    } else{
                    $('#inputNombre').css("outline","2px solid lightgreen");
                    $('#inputNombre').css("transition","outline .2s");
                    }
                });
                
                $('#inputApellido').focusout(function(){
                    let inputA = $('#inputApellido').val();
                    if(inputA == null || inputA.length == 0 || /^\s+$/.test(inputA)){
                    $('#inputApellido').css("outline","2px solid red");
                    $('#inputApellido').css("transition","outline .2s");
                    } else{
                    $('#inputApellido').css("outline","2px solid lightgreen");
                    $('#inputApellido').css("transition","outline .2s");
                    }
                });
                
                $('#inputDireccion').focusout(function(){
                    let inputD = $('#inputDireccion').val();
                    if(inputD == null || inputD.length == 0 || /^\s+$/.test(inputD)){
                    $('#inputDireccion').css("outline","2px solid red");
                    $('#inputDireccion').css("transition","outline .2s");
                    } else{
                    $('#inputDireccion').css("outline","2px solid lightgreen");
                    $('#inputDireccion').css("transition","outline .2s");
                    }
                });
                
                $('#inputEmail').focusout(function(){
                    let inputE = $('#inputEmail').val();
                    if(inputE == null || inputE.length == 0 || /^\s+$/.test(inputE)){
                    $('#inputEmail').css("outline","2px solid red");
                    $('#inputEmail').css("transition","outline .2s");
                    }
                    if(!(/^(?:[^<>()[\].,;:\s@"]+(\.[^<>()[\].,;:\s@"]+)*|"[^\n"]+")@(?:[^<>()[\].,;:\s@"]+\.)+[^<>()[\]\.,;:\s@"]{2,63}$/i.test(inputE))){
                    $('#inputEmail').css("outline","2px solid red");
                    $('#inputEmail').css("transition","outline .2s");
                    } else{
                    $('#inputEmail').css("outline","2px solid lightgreen");
                    $('#inputEmail').css("transition","outline .2s");
                    }
                });
            
            // Evento Boton
            $('#btnPedido').click(function(){
                if(deliveryUser == "retirar" && seleccionado == ""){
                    alert("Debe Seleccionar una Sucursal");
                    location.reload();
                }
                // Valores del Input
                let inputNombre = $('#inputNombre').val();
                let inputApellido = $('#inputApellido').val();
                let inputEmail = $('#inputEmail').val();
                let inputDireccion = $('#inputDireccion').val();
                let variableBolson = $('#bol').val(); // antes estaba #variableBolson
                variableBolson = parseInt(variableBolson); // Convierto de String a Int
                let retirarUser = deliveryUser; // Variable Retirar o A domicilio
                let sucursalUser = seleccionado; // Variable Sucursal Elegida

                // Variables Bandera
                let validarNombre;
                let validarApellido;
                let validarDireccion;
                let validarEmail;
                
                // Validacion formularios antes de enviar
                if(inputNombre == null || inputNombre.length == 0 || /^\s+$/.test(inputNombre)){
                    $('#inputNombre').css("outline","3px solid red");
                    validarNombre = false;
                } else{validarNombre = true}
                
                if(inputApellido == null || inputApellido.length == 0 || /^\s+$/.test(inputApellido)){
                    $('#inputApellido').css("outline","3px solid red");
                    validarApellido = false;
                } else{validarApellido = true}
                
                if(inputDireccion == null || inputDireccion.length == 0 || /^\s+$/.test(inputDireccion)){
                    $('#inputDireccion').css("outline","3px solid red");
                    validarDireccion = false;
                } else{validarDireccion = true}              

                if(!(/^(?:[^<>()[\].,;:\s@"]+(\.[^<>()[\].,;:\s@"]+)*|"[^\n"]+")@(?:[^<>()[\].,;:\s@"]+\.)+[^<>()[\]\.,;:\s@"]{2,63}$/i.test(inputEmail))) {
                    $('#inputEmail').css("outline","3px solid red");
                    validarEmail = false;
                } else{validarEmail = true}

                // Si las validaciones son TRUE, se ejecuta el AJAX
                if(validarNombre == true && validarApellido == true && validarDireccion == true && validarEmail == true){
                    // Datos del PDF
                    var name = $('#inputNombre').val();
                    var lastname = $('#inputApellido').val(); 
                    var adress = $('#inputDireccion').val(); 
                    var email = $('#inputEmail').val();
                    var bag = variableBolson;
                    var sucursalname = sucursalUser;

                    // Limpio el formulario
                    $('#inputNombre').val("");
                    $('#inputApellido').val("");
                    $('#inputEmail').val("");
                    $('#inputDireccion').val("");
                    $('#div-vacio').empty();
                    $('#dom').attr('checked', true);

                    // Ajax
                    $.ajax({
                        url: 'pedido',
                        type: 'POST',
                        data: {
                            inputNombre : inputNombre,
                            inputApellido : inputApellido,
                            inputEmail : inputEmail,
                            inputDireccion : inputDireccion,
                            variableBolson : variableBolson,
                            retirarUser : retirarUser,
                            sucursalUser : sucursalUser
                        },
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        success : function(response){
                            $("#div-vacio").append(function(){

                                enlacePdf = `<a target="_blank" id="impresiones" href="/pdf?name=${name}&lastname=${lastname}&adress=${adress}&bag=${bag}&sucursalname=${sucursalname}">Generar PDF</a>`;
                                $('#impresiones').click(function(){
                                    $("#div-vacio").empty();
                                });
                                return enlacePdf;
                            })
                        },
                        error : function(){
                            alert('Se produjo un error en el Servidor, vuelva a Intentarlo más tarde ');
                        }
                    })
                } else{alert("Un campo del formulario contiene un error")}
            }) //ok  
        }) //ok
    </script>
</html>
