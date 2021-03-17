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

        #paginar{
            display: flex;
            justify-content: space-between;
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
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                </tr>
            </tbody>
        </table>
        <div>
        <div><p>Cantidad de Páginas: <b id="valorCantidad"></b></p></div>
        <ul id="paginar">
            <li><a id="idFirst" href="#">Primera Página</a></li>
            <li><a id="idAnterior" href="#">Anterior</a></li>
            <li><a id="idSiguiente" href="#">Siguiente</a></li>
            <li><a id="idLast" href="#">Última Página</a></li>
        </ul>

        <input id="identificador" style="color: white; border: 1px solid white;" type="text" value="<?php echo $id?>" readonly>
        <input id="paginaNumero" style="color: white; border: 1px solid white;" type="text" value="<?php echo $pag?>" readonly>
        <meta name="csrf-token" content="<?php echo csrf_token()?>">
    </div>
    </div>
    <script>
    $(document).ready(function(){
        let id = $('#identificador').val();
        let paginaNumero = $('#paginaNumero').val();
        console.log(id);
        console.log(paginaNumero);

        $.ajax({
            url: 'listarExistencias',
            type: 'GET',
            data: {
                id: id,
                paginaNumero : paginaNumero
            },
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(response){
                console.log(response);
            },
            error: function(){
                alert("Ha sucedido un error intentelo de nuevo");
            }
        })

        $.ajax({
            url: 'cantidad',
            type: 'GET',
            data: {
                id: id,
            },
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(response){
                $('#valorCantidad').val(response);
            },
            error: function(){
                $('#valorCantidad').val("Error");
            }
        })
        
        $('#idFirst').click(function(){
            paginaNumero = parseInt(paginaNumero) + 1;
        })

    })

    </script>
</body>
</html>