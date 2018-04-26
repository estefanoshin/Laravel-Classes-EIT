@extends('layouts.app')
@section('content')
<table id="altaProd"  align="center" class="table table-striped">
  <thead class="bg-dark">
    <tr>
        <td scope="col">Codigo</td>
        <td scope="col">Categoria</td>
        <td scope="col">Nombre</td>
        <td scope="col">Precio</td>
        <td scope="col">Stock</td>
        <td scope="col" colspan="2"><img src="{{ asset('add.png') }}" class="small-icon" alt="add"></td>
    </tr>
  </thead>
    @foreach($productos as $producto)
    <tr>
        <th scope="row">{{ $producto->cod_producto }}</th>
        <td>
          @foreach($categorias as $categoria)
            @if($producto->cod_categoria == $categoria->cod_categoria)
              {{$categoria->descripcion}}
            @endif
          @endforeach
        </td>
        <td>{{ $producto->nombre }}</td>
        <td>{{ $producto->precio }}</td>
        <td>{{ $producto->stock }}</td>
        <td><a class="btn btn-info" href="{{ route('edit', $producto->cod_producto) }}">Modificar</a></td>
        <td><a class="btn btn-danger" href="{{ route('destroy', $producto->cod_producto) }}">Borrar</a></td>
    </tr>
    @endforeach
</table>
@endsection
