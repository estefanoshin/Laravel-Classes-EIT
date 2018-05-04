<div class="form-row">
<div class="input-group col-md-6 mb-3">
  <div class="input-group-prepend">
    <label class="input-group-text" for="cod_categoria">Categorias : </label>
  </div>

	<select name="cod_categoria" id="cod_categoria">
		@foreach($categorias as $categoria)

		<option
      value="{{ $categoria->cod_categoria }}"
      @if( old('cod_categoria') == $categoria->cod_categoria )
      selected
      @endif

      @if( $productos->cod_categoria == $categoria->cod_categoria )
      selected
      @endif
			>

			{{ $categoria->descripcion }}

		</option>
		@endforeach
	</select>
</div>

</div>
