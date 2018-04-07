<?php
class Controller {

	function mostrar_resultados () {
		require_once __DIR__.'/../model/product.class.php';
		require_once __DIR__.'/../view/vista.class.php';

		$producto = new Product();
		$productos = $producto->getAll();

		$vista = new Vista();
		$lista_productos = $vista->mostrarTabla($productos);

	}

	static function mostrarResultados2 () {
		echo 'Resultado 2';
	}
}
?>