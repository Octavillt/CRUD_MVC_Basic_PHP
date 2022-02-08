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
		while($datos = $sql_get_all->fetch_assoc()){
				array_push($arrPersonas, $datos);
			}
	
		return $arrPersonas;
	}
	public static function getPersona(int $actualiza_id){
		$sql_get_persona = Conexion::conexio()->query("SELECT idpersona, nombre,apellido,telefono,email FROM persona WHERE
		'{$actualiza_id}' = idpersona AND status != 0 ");
	
		$result_get_persona = $sql_get_persona->fetch_assoc();
		return $result_get_persona;
	}

	public static  function updatePersona(int $actualiza_id,
		string $nombre, string $apellido, int $telefono, string $email){

		$sql_update = Conexion::conexio()->query("UPDATE persona SET nombre = '{$nombre}', apellido = '{$apellido}', telefono = '{$telefono}', email = '{$email}' WHERE idpersona = '{$actualiza_id}'");
		return $sql_update;

	}
	
		public static function deletePersona($eliminar_id){
		//$sql_delete = Conexion::conexio()->query("DELETE FROM persona WHERE idpersona = '{$eliminar_id}'");
		$sql_delete = Conexion::conexio()->query("UPDATE persona SET status = 0 WHERE idpersona  =
			'{$eliminar_id}'");
		return $sql_delete;
	}

}

 ?>