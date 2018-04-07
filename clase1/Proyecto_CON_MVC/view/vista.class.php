<?php
class Vista {

	function mostrarTabla ($listaProductos) {
		$html = '<table border="1">';
		$html.= '<tr>';
		$html.= '<th>Cod</th>';
		$html.= '<th>Nombre</th>';
		$html.= '<th>Precio</th>';
		$html.= '<th>Stock</th>';
		$html.= '</tr>';

		foreach ($listaProductos as $producto) {
			$html.= '<tr>';
			$html.= '<td>'.$producto['cod_producto'].'</td>';
			$html.= '<td>'.$producto['nombre'].'</td>';
			$html.= '<td>'.$producto['precio'].'</td>';
			$html.= '<td>'.$producto['stock'].'</td>';
			$html.= '<tr>';
		}

		$html.= '</table>';

		echo $html;
	}
}
?>