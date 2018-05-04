<table>
  <thead>
    <th>Codigo Categoria</th>
    <th>Categoria</th>
  </thead>

  <tbody>
    @foreach($categorias as $categoria)
    <tr>
      <td>{{ $categoria->cod_categoria }}</td>
      <td>{{ $categoria->descripcion }}</td>
    </tr>
    @endforeach
  </tbody>
</table>
