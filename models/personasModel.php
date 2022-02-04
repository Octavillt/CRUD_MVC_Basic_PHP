<?php 

require_once ('conexion.php');


class UsuariosModel{

	/*private $conexion;
	function __construct(){
	$this->conexion = new Conexion();
	$this->conexion = $this->conexion->conexio();
	}*/

	public static function insertPersona(string $nombre, string $apellido, int $telefono, string $email){
			
		$sql_insert = Conexion::conexio()->query("INSERT INTO persona(nombre,apellido,telefono,email)
			VALUES('{$nombre}','{$apellido}','{$telefono}','{$email}')");
		return $sql_insert;

		/*$stmt = Conexion::conexio()->prepare("INSERT INTO persona(nombre,apellido,telefono,email)
			VALUES('{$nombre}','{$apellido}','{$telefono}','{$email}')");
		$stmt->execute();
		if($stmt == true){
			return "ok";
		}else{
			return "error";
			print_r("<pre>");
			print_r(Conexion::conexio()->errorInfo());
		}*/

	}

	public static function getPersonas(){
		$arrPersonas = array();
		$sql_get_all = Conexion::conexio()->query("SELECT idpersona, nombre,apellido,telefono,email FROM persona WHERE status != 0");
		while($datos = $sql_get_all -> fetch_assoc()){
				array_push($arrPersonas, $datos);
			}
	
		return $arrPersonas;
	}

}

 ?>