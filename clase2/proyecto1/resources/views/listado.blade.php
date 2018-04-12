<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }

        #form_buscador {
            position: absolute;
            left: 50%;
        }
        </style>
    </head>
    <body>

    <form method="GET" id="form_buscador">
        <span>Buscador de productos : </span>
        <input type="text" name="busqueda" placeholder="Nombre de producto">
        <button type="submit">Buscar</button>
    </form>

    

    <h1>Listado</h1>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Stock</th>
            </tr>
        </thead>

        <tbody>
        @foreach ($productos as $producto)
            <tr>
                <th>{{ $producto->cod_producto }}</th>
                <th>{{ $producto->nombre }}</th>
                <th>${{ $producto->precio }}</th>
                <th>{{ $producto->stock }}u.</th>
            </tr>
        @endforeach 
        </tbody>
    </table>

    </body>
</html>
