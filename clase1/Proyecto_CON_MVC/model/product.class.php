<?php
class Product {
	protected $conectado;

	function __construct () {
		require_once __DIR__.'/../config.php';
		$conexion = new Conexion();
		$this->conectado = $conexion->conectar();
	}

	private $cod_producto;
	private $categoria;
	private $nombre;
	private $precio;
	private $stock;

    function getAll () {
    	$stmt = $this->conectado->query("SELECT * FROM productos");
    	return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    function query () {

    }

    function insert () {

    }

    function update () {

    }

}
?>