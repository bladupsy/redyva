<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/app.css')}}" type="text/css">
    <title>Redyva</title>

    <head>
        <style>
            .fondo-inicio {
                position: relative;
                background-image: url("{{ asset('img/verde.png') }}");
                background-size: cover;
                padding-top: 200px;
                min-height: 450px;
                z-index: 1;
            }

            .subtitle {
                font-family: 'Montserrat', sans-serif;
                font-size: 20px;
                line-height: 25dpx;
                letter-spacing: -0.03em;
            }

            .card-center {
                z-index: 99;
                margin-top: -180px;
            }

            .separador-derecho {
                padding-right: 46px;
            }

            .line {
                display: flex;
                flex-wrap: wrap;
                justify-content: flex-end;
                padding: 0.75rem;
                border-top: 2px dashed #e94e1a !important;
                width: 420px;
                border-bottom-right-radius: calc(0.3rem - 1px);
                border-bottom-left-radius: calc(0.3rem - 1px);
            }

            .line-one {
                display: flex;
                flex-wrap: wrap;
                justify-content: flex-end;
                padding: 0.75rem;
                border-top: 2px solid #e94e1a !important;
                width: 420px;
                border-bottom-right-radius: calc(0.3rem - 1px);
                border-bottom-left-radius: calc(0.3rem - 1px);
            }

            .flecha-volver {
                margin-left: 200px;
                color: #878787 !important;
                margin-top: 20px;
            }

            .precio {
                font-family: 'Montserrat', sans-serif;
                font-size: 35px;
                line-height: 0px;
                letter-spacing: -0.03em;
                color: #E94E1A;
            }

            .card-subtitle {
                margin-top: -20px;
            }

            .pedido {
                margin: auto;
                margin-left: 100px;
                font-size: 28px;
                line-height: 30px;

                /* identical to box height, or 94% */
                letter-spacing: -0.03em;
            }
            .separador {
                margin-left: 80px;
            }
        </style>
    </head>

<body>
    <div class="container-fluid fondo-inicio"></div>
    <div class="container-sm">

        <div class="flecha-volver">
            <a href="index"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="dark" class="bi bi-arrow-left-circle " viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z" />
                </svg></a>
        </div>
    </div>

    <div class="card card-center mx-auto" style="width: 30rem;">
        <!--mx: margin igual -->
        <div class="card-body">
            <h5 class="card-title">selecciona tú bolsón <b class="separador"> para el:</b> viernes </h5>
            <hr class="line-one">
            <div>
            </div>
            <div class="row align-items-start">
                <div class="col-8">
                    <h6 class="card-subtitle text-dark">verde</h6>
                </div>

            </div>
            <p class="card-text">
            <div class="subtitle">
                <table>
                    <tbody>
                        <tr>
                            <td class="separador-derecho">Llevas <b>1<br> bolsón pesado</b></td>
                            <td class="precio">$300</td>
                        </tr>

                    </tbody>
                </table>
                <hr class="line">
                <a class="btn btn-orange text-light rounded-pill pedido" href="formPedido">confirmar pedido</a>
            </div>
            </p>
        </div>
    </div>





    <script src="{{asset('js/app.js')}}" type="text/javascript"></script>
</body>

</html>