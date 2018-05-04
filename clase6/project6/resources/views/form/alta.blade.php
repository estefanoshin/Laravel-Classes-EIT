@extends('layouts.app')
@section('content')

@if($errors->any())
	<div class="alert alert-danger">
		{{$errors}}
	</div>
@endif

@if(isset($productos->cod_producto))
<input type="text" name="cod_producto" value="{{ $productos->cod_producto }}" hidden>
@endif

<form method="post" action="{{ route('store') }}" class="form needs-alidation col-lg-12 col-centered" novalidate>
<fieldset id="formProducto">
	<legend>Formulario de {{ $productos->cod_producto ? 'modificacion' : 'alta' }} del producto</legend>
@csrf
<div class="form-row">
	<div class="input-group col-md-6 mb-3">
		<div class="input-group-prepend">
			<label class="input-group-text" for="nombre">Nombre del Producto : </label>
		</div>
			<input
			required
			type="text"
			name="nombre"
			placeholder="Ingrese nombre del Producto"
			value="{{old('nombre', $productos->nombre)}}"
			class="form-control">
			<div class="invalid-feedback">Ingrese un Producto</div>
	</div>
</div>

@include('productos.categorias')

<div class="form-row">
	<div class="input-group col-md-6 mb-3">
		<div class="input-group-prepend">
			<label class="input-group-text" for="nombre">Precio : </label>
		</div>
			<input
			required
			type="text"
			name="precio"
			placeholder="Ingrese precio del Producto"
			value="{{old('precio', $productos->precio)}}"
			class="form-control">
			<div class="invalid-feedback">Ingrese un Precio</div>
	</div>
</div>

<div class="form-row">
	<div class="input-group col-md-6 mb-3">
		<div class="input-group-prepend">
			<label class="input-group-text" for="stock">Stock : </label>
		</div>
			<input
			id="stock"
			type="text"
			name="stock"
			placeholder="Ingrese Stock del Producto"
			value="{{old('stock', $productos->stock)}}"
			class="form-control">
			<div class="invalid-feedback">Ingrese Stock</div>
	</div>
</div>
</fieldset>

	<button class="btn btn-outline-success" type="submit">
		{{ $productos->cod_producto ? 'Modificar' : 'Agregar' }}
	</button>
</form>

<script type="text/javascript" src="{{ asset('js/formValidation.js') }}"></script>
@endsection
