<form method="post" action="{{ route('store') }}">
{{ csrf_field() }}
	Nombre : <input type="text" name="nombre" placeholder="Ingrese Nombre">

	@include('productos.categorias')

	Precio : <input type="text" name="precio" placeholder="Ingrese Precio">
	Stock : <input type="text" name="stock" placeholder="Ingrese Stock">

	<button type="submit">Agregar</button>
</form>
