<?php 

require_once("controllers/Ruteador.php");
require_once("controllers/Persona.php");
require_once("models/conexion.php");
require_once("models/personasModel.php");

/*$conexion = Conexion::conexio();

print_r('<pre>');
print_r($conexion); */

$ruteador = new Ruteador();

$ruteador->traePrincipal();


 ?>