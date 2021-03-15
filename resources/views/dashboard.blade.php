<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}" type="text/css">
    <title>RedyVa</title>
    <style>
        .tarjeta {
            margin-top: 100px;
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
    <article class="container tarjeta">
        <div class="row align-items-center">
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('img/citrus.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Lista de pedido</h5>
                        <p class="card-text">Bolson citrus.</p>
                        <a href="#" class="btn btn-outline-orange rounded-pill">Ir a la lista</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('img/verde.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Lista de pedidos</h5>
                        <p class="card-text">Bolson verde.</p>
                        <a href="#" class="btn btn-outline-success rounded-pill">Ir a la lista</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('img/berenjena.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Lista de pedidos</h5>
                        <p class="card-text">Bolson pesado.</p>
                        <a href="#" class="btn btn-outline-orange rounded-pill">Ir a la lista</a>
                    </div>
                </div>
            </div>
        </div>
    </article>
</body>

</html>