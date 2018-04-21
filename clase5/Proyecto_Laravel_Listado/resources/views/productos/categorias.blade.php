<select name="cod_categoria">
	@foreach($categorias as $categoria)
	<option value="{{ $categoria->cod_categoria }}">{{ $categoria->descripcion }}</option>
	@endforeach
</select>
