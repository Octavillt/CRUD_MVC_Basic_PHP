<?php 

require_once ('conexion.php');


class UsuariosModel
{

		/*private $conexion;
		function __construct(){
		$this->conexion = new Conexion();
		$this->conexion = $this->conexion->conexio();
	}*/

	public static function insertPersona(string $nombre, string $apellido,int $telefono, string $email){
		$sql_insert = Conexion::conexio()->query("INSERT INTO persona(nombre,apellido,telefono,email)
			VALUES('{$nombre}','{$apellido}','{$telefono}','{$email}')");
		return $sql_insert;
		}

	public static function validarEmail(string $email){
		$sql_valiEmail = Conexion::conexio()->query("SELECT email FROM persona WHERE email = '{$email}'");
		$result_valiEmail = $sql_valiEmail->fetch_assoc(); 
			return $result_valiEmail;		
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
	public static function buscarPersonas($buscar_get){
		$arrBusPer = array();
		$sql_get_all = Conexion::conexio()->query("SELECT idpersona, nombre, apellido, telefono, email FROM persona WHERE  status != 0 AND nombre LIKE '%{$buscar_get}%' OR apellido LIKE '%{$buscar_get}%' OR telefono LIKE '%{$buscar_get}%' OR email LIKE '%{$buscar_get}%'");
		while($bus_per = $sql_get_all->fetch_assoc()){
			array_push($arrBusPer, $bus_per);
		}
		return $arrBusPer;
	}
}



/*

SELECT idpersona, nombre, apellido, telefono, email, status FROM persona WHERE  status != 0 AND nombre LIKE '%{$buscar_get}%' OR apellido LIKE '%{$buscar_get}%' OR telefono LIKE '%{$buscar_get}%' OR email LIKE '%{$buscar_get}%'


SELECT idpersona, nombre, apellido, telefono, email, status FROM persona WHERE idpersona LIKE '%$buscar_get%' OR nombre LIKE '%$buscar_get%' OR apellido LIKE '%$buscar_get%' OR telefono LIKE '%$buscar_get%' OR email LIKE '%$buscar_get%' AND status = 1


*/
 ?>