<?php
/*********** __DIR__
* __DIR__ hace que trabaje directament en donde esta posicionado el documento actual
*/
require_once __DIR__.'/controller/controller.class.php';

/*** Funcion NO static **/
$controlador = new Controller();
$controlador->mostrar_resultados();


// Controller::mostrarResultados2();
?>