<table>
  <thead>
    <th>Codigo Producto</th>
    <th>Categoria</th>
    <th>Nombre Producto</th>
    <th>Precio</th>
    <th>Stock</th>
  </thead>

  <tbody>
    @foreach($productos as $producto)
    <tr>
      <td>{{ $producto->cod_producto }}</td>
      <td>{{ $producto->cod_categoria }}</td>
      <td>{{ $producto->nombre }}</td>
      <td>{{ $producto->precio }}</td>
      <td>{{ $producto->stock }}</td>
    </tr>
    @endforeach
  </tbody>
</table>
