<form action="{{ route('destroy', [$producto->cod_producto]) }}" method="post">
  @method('delete')
  <input type="text" name="cod_producto" value="{{$producto->cod_producto}}" hidden>
  <button type="submit">Borrar</button>
</form>
