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
            <div class="card-body">
                <hr class="line-one">
                <div>
                </div>
                <div class="">
                    <h6 class="card-subtitle text-dark">Para terminar edite los datos que desee cambiar en la DB</h6>
                </div>
                <div class="col">
                    <label for="inputId" class="form-label">Id</label><br>
                    <input readonly value="<?php echo $id ?>" required type="text" name="idGG" id="inputId" placeholder="Id" class="datos">
                </div>
            </div>
            <div class="formulario">
                <form class="row g-3">
                    <div class="row ingreso">
                        <div class="col">
                            <label for="inputNombre" class="form-label">Nombre</label><br>
                            <input value="<?php echo $nombre ?>" required type="text" name="nombreGG" id="inputNombre" placeholder="Nombre" class="datos">
                        </div>
                        <div class="col">
                            <label for="inputApellido" class="form-label">Apellido</label>
                            <input value="<?php echo $apellido ?>" required type="text" name="apellidoGG" id="inputApellido" placeholder="Apellido" class="datos">
                        </div>
                    </div>
                    <div class="col-12 ingreso">
                        <label for="inputEmail" class="form-label">Correo Electronico</label><br>
                        <input value="<?php echo $email ?>" required type="email" name="emailGG" id="inputEmail" placeholder="Email" class="datos" style="width: 430px;">
                    </div>
                    <div class="col-12 ingreso">
                        <label for="inputDirección" class="form-label">Dirección</label><br>
                        <input value="<?php echo $direccion ?>" required type="text" name="direccionGG" placeholder="Ingrese su Dirección" id="inputDireccion" class="datos" style="width: 430px;"><br>
                    </div>
                    <div class="col-12 ingreso">
                        <label for="inputBolson" class="form-label">Bolson</label><br>
                        <input value="<?php echo $bolson ?>" required type="text" name="bolsonGG" placeholder="Ingrese su Bolson" id="inputBolson" class="datos" style="width: 430px;"><br>
                    </div>
                    <div class="col-12 ingreso">
                        <label for="inputSucursal" class="form-label">Sucursal</label><br>
                        <input value="<?php echo $sucursal ?>" required type="text" name="sucursalGG" placeholder="Ingrese su Sucursal" id="inputSucursal" class="datos" style="width: 430px;"><br>
                    </div>
                    <div class="col-12 ingreso">
                        <label for="inputForma" class="form-label">Forma</label><br>
                        <input value="<?php echo $forma ?>" required type="text" name="formaGG" placeholder="Ingrese su Forma de recibirlo" id="inputForma" class="datos" style="width: 430px;"><br>
                    </div>
                    
                    <meta name="csrf-token" content="<?php echo csrf_token()?>">
                    <div class="enviar">
                        <a id="btnEditar" class="btn btn-orange text-light rounded-pill"  href="#">Editar Pedido</a>
                    </div>
                </form>
            </div>
        </div>
        <script src="{{asset('js/app.js')}}" type="text/javascript"></script>
</body>
    <!--!!!! Aca Viene JavaScript (Jquery) !!!!-->
    <script>
        $(Document).ready(function(){
            $('#btnEditar').click(function(){
                let id = $('#inputId').val();
                let nombre = $('#inputNombre').val();
                let apellido = $('#inputApellido').val();
                let email = $('#inputEmail').val();
                let direccion = $('#inputDireccion').val();
                let bolson = $('#inputBolson').val();
                let sucursal = $('#inputSucursal').val();
                let forma = $('#inputForma').val();

                $.ajax({
                    url: 'editar',
                    type: 'GET',
                    data: {
                        id: id,
                        nombre: nombre,
                        apellido: apellido,
                        email: email,
                        direccion: direccion,
                        bolson: bolson,
                        sucursal: sucursal,
                        forma: forma
                    },
                    headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response){
                        $('#inputId').val("");
                        $('#inputNombre').val("");
                        $('#inputApellido').val("");
                        $('#inputEmail').val("");
                        $('#inputDireccion').val("");
                        $('#inputBolson').val("");
                        $('#inputSucursal').val("");
            $           ('#inputForma').val("");
                        alert(`El Registro del ID:${id} fué editado correctamente`);
                    },
                    error: function(){
                        alert("Se Produjo un Error Modificando el Registro")
                    }
                })
            });
        })
    
    </script>
</html>