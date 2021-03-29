<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}" type="text/css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <title>RedyVa</title>
    <style>
        .tabla {
            margin-top: 80px;
        }

        #paginar {
            display: flex;
            justify-content: space-between;
        }

        #div-volver {
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            align-content: center;
        }

        #volverDashboard {
            margin-bottom: -40px;
        }

        li {
            list-style: none;
        }

        #edit {
            text-decoration: none;
            color: #e94d1a;
            padding-left: 5px;
            padding-right: 5px;
            transition: .3s;
        }

        #edit:hover {
            font-size: 20px;
            transition: .4s;
            border: 1px solid #e94d1a;
        }

        .volver {
            margin-top: 50px;

            margin-left: -950px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-light ">
        <div class="container-sm">
            <a class="navbar-brand" href="index">
                <img src="{{ asset('img/redyva.png') }}" width="53" height="53">
            </a>
        </div>
    </nav>
    <div id="div-volver">
        <a type="button" class="btn btn-outline-orange rounded-pill volver" href="/dashboard" id="volverDashboard">Volver al Dashboard</a>
    </div>
    <div class="container tabla">
        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Email</th>
                    <th scope="col">Direccion</th>
                    <th scope="col">Sucursal</th>
                    <th scope="col">Bolson</th>
                    <th scope="col">Forma</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody id="datos">

            </tbody>
        </table>
        <div>
            <div>
                <p></p> <input readonly size="2" id="valorpagina" value=""> de <input readonly size="2" id="valorCantidad" value=""></p>
            </div>
            <ul id="paginar">
                <li><a class="btn btn-outline-dark" id="idFirst" href="#">Primera Página</a></li>
                <li><a class="btn btn-outline-dark" id="idAnterior" href="#">Anterior</a></li>
                <li><a class="btn btn-outline-dark" id="idSiguiente" href="#">Siguiente</a></li>
                <li><a class="btn btn-outline-dark" id="idLast" href="#">Última Página</a></li>
            </ul>

            <input id="identificador" style="color: white; border: 1px solid white;" type="text" value="<?php echo $id ?>" readonly>
            <input id="paginaNumero" style="color: white; border: 1px solid white;" type="text" value="<?php echo $pag ?>" readonly>
            <meta name="csrf-token" content="<?php echo csrf_token() ?>">
        </div>
    </div>
    <script>
        $(document).ready(function() {
            let id = $('#identificador').val();
            let paginaString = $('#paginaNumero').val();
            // lo paso de string a number
            let pagina = parseInt(paginaString);
            var registrosTotal;
            var totalPaginas;
            const cantMax = 10;
            // Consigue la cantidad de registros que tiene la tabla
            $.ajax({
                url: 'cantidad',
                type: 'GET',
                data: {
                    id: id,
                },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    $.each(response, function(index, value) {
                        $('#valorCantidad').val(`${value.idpedidos}`);
                    });
                    console.log($('#valorCantidad').val());
                    console.log(typeof($('#valorCantidad').val()));

                    let cantidadTotal = $('#valorCantidad').val();
                    registrosTotal = parseInt(cantidadTotal);
                    totalPaginas = Math.ceil(registrosTotal / cantMax);
                    $('#valorCantidad').val(totalPaginas);
                },
                error: function() {
                    $('#valorCantidad').val("Error");
                }
            });

            // Funcion que Muestra la pagina 1 de Datos en la Tabla
            const tabla = function(para1, para2, para3) {
                let id = para1;
                var paginaNumero = para2;
                let max = para3;
                $('#datos').empty();
                $.ajax({
                    url: 'listarExistencias',
                    type: 'GET',
                    data: {
                        id: id,
                        paginaNumero: paginaNumero,
                        max: max
                    },
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        console.log(response);
                        $.each(response, function(index, value) {
                            $('#datos').append(`
                        <tr>
                            <th scope="row">${value.idpedidos}</th>
                            <td>${value.nombre}</td>
                            <td>${value.apellido}</td>
                            <td>${value.email}</td>
                            <td>${value.direccion}</td>
                            <td>${value.id_sucursal}</td>
                            <td>${value.id_bolson}</td>
                            <td>${value.aDomicilio}</td>
                            <td> <a id="edit" href="/insertar?id=${value.idpedidos}&nombre=${value.nombre}&apellido=${value.apellido}&email=${value.email}&direccion=${value.direccion}&sucursal=${value.id_sucursal}&bolson=${value.id_bolson}&forma=${value.aDomicilio}">✐</a></td>
                        </tr>
                        `)
                        })
                    },
                    error: function() {
                        alert("Ha sucedido un error intentelo de nuevo");
                    }
                })
            }

            // Muestro los datos ejectuando la funcion
            tabla(id, pagina, totalPaginas);
            $('#valorpagina').val(pagina);

            // Ejecuta la funcion de Mostrar la pagina 1
            $('#idFirst').click(function() {
                pagina = 1;
                $('#datos').empty();
                tabla(id, pagina, totalPaginas);
                console.log(pagina);
                $('#valorpagina').val(pagina);
            });

            $('#idAnterior').click(function() {
                if (pagina > 1) {
                    $('#datos').empty();
                    pagina -= 1;
                    tabla(id, pagina, totalPaginas);
                    console.log(pagina);
                    $('#valorpagina').val(pagina);
                }
            });

            $('#idSiguiente').click(function() {

                if (pagina < totalPaginas) {
                    $('#datos').empty();
                    pagina += 1;
                    tabla(id, pagina, totalPaginas);
                    console.log(pagina);
                    $('#valorpagina').val(pagina);
                }
            });

            $('#idLast').click(function() {
                pagina = totalPaginas;
                $('#datos').empty();
                tabla(id, pagina, totalPaginas);
                console.log(pagina);
                $('#valorpagina').val(pagina);
            });
        })
    </script>
</body>

</html>