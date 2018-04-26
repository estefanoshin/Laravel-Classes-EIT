@extends('layouts.app')

@section('content')
    </head>
    <body>
        <div class="flex-center position-ref full-height">

            <div class="content">
                <div class="title m-b-md">
                    Clase 6
                </div>

                <button
                  type="button"
                  class="btn btn-outline-dark"
                  name="listado"
                  onclick="window.location.href='{{ route('listado') }}'">
                  <div class="btn-text">Listado</div>
                </button>

                <button
                  type="button"
                  class="btn btn-outline-dark"
                  name="listado"
                  onclick="window.location.href='{{ route('altaProducto') }}'">
                    <div class="btn-text">Alta de Producto</div>
                </button>

            </div>
        </div>
    </body>
</html>
@endsection
