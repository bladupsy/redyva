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
            <div class="card-body">
                <h5 class="card-title">selecciona tú bolsón<b class="separador"> para el:</b> viernes </h5>
                <hr class="line-one">
                <div>
                </div>
                <div class="">
                    <h6 class="card-subtitle text-dark">Para terminar anotá tu nombre y un número
                        de teléfono para comunicarnos</h6>
                </div>
            </div>
            <div class="formulario">
                <form class="row g-3">
                    <div class="row ingreso">
                        <div class="col">
                            <label for="inputNombre" class="form-label">Nombre</label><br>
                            <input type="text" name="nombreGG" id="inputNombre" placeholder="nombre" class="datos">
                        </div>
                        <div class="col">
                            <label for="inputApellido" class="form-label">Apellido</label>
                            <input type="text" name="apellidoGG" id="inputApellido" placeholder="Apellido" class="datos">
                        </div>
                    </div>
                    <div class="col-12 ingreso">
                        <label for="inputEmail" class="form-label">Correo Electronico</label><br>
                        <input type="email" name="emailGG" id="inputEmail" placeholder="Email" class="datos" style="width: 430px;">
                    </div>
                    <div class="col-12 ingreso">
                        <label for="inputDirección" class="form-label">Dirección</label><br>
                        <input type="text" name="direccionGG" id="inputDireccion" class="datos" style="width: 430px;"><br>
                    </div>
                    <div class="row ingreso-2">
                            <div class="col">
                          
                                <input type="radio" name="domicilio" id="" value="domicilio" require checked>Envio adomicilio<br>
                            </div>
                            <div class="col">
                                <input type="radio" name="domicilio" id="" value="retirar">Retirar en sucursal<br>
                                <div id="div-vacio"></div>

                            </div>

                    </div>
                    <div class="col-12 ingreso">
                    <label for="inputFecha" class="form-label">Fecha de entrega</label>
                        <input type="date" name="fechaGG" id="inputFecha" class=""><br>

                    </div>
                        <div class="enviar">
                            <button id="btnPedido" class="btn btn-orange text-light rounded-pill">Hacer Pedido</button>

                        </div>


                </form>
            </div>
            <!--!!!!!!!!!!!!!!!!!!!!!!!!!!!! Aca Viene JavaScript (Jquery) !!!!!!!!!!!!!!!!!!!!!!!!!!!!!-->
            <script>
                $(document).ready(function() {
                    let nombreUser = $('#inputNombre').val();
                    let apellidoUser = $('#inputApellido').val();
                    let emailUser = $('#inputEmail').val();
                    let direccionUser = $('#inputDireccion').val();
                    let fechaUser = $('#inputFecha').val();
                    let deliveryUser = $('input:radio[name=domicilio]:checked').val();

                    // Al hacer Click en -Retirar- se crea el <select>
                    $("input[name=domicilio]").click(function() {
                        $("#div-vacio").empty();
                        let deliveryUser = $('input:radio[name=domicilio]:checked').val();
                        if (deliveryUser == "retirar") {
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
                    $("#btnPedido").click(function() {
                        let seleccionado = $('select[id=seleccion]').val();
                        if (seleccionado == "") {
                            alert("Debe seleccionar una Sucursal")
                            console.log($('#inputFecha').val());
                        }
                    })
                })
            </script>
        </div>
        <script src="{{asset('js/app.js')}}" type="text/javascript"></script>
</body>

</html>