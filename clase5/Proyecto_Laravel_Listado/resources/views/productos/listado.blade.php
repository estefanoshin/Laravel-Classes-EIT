<table width=60% align="left" cellpadding="0" cellspacing="0" border=2>
    <tr>
        <td>Codigo</td>
        <td>categoria</td>
        <td>Nombre</td>
        <td>Precio</td>
        <td>Stock</td>
        <td colspan="2"> + </td>
    </tr>
    @foreach($productos as $producto)
    <tr>
        <td>{{ $producto->cod_producto }}</td>
        <td>{{ $producto->cod_categoria }}</td>
        <td>{{ $producto->nombre }}</td>
        <td>{{ $producto->precio }}</td>
        <td>{{ $producto->stock }}</td>
        <td><a href="">Modificar</a></td>
        <td>
          {{Form::open('method' => 'DELETE', 'route' => ['destroy', $producto->cod_producto])}}
          {{ Form::hidden('cod_producto', $producto->cod_producto) }}
            {{ Form::submit('Delete') }}
          {{ Form::close() }}
        </td>
    </tr>
    @endforeach
</table>
