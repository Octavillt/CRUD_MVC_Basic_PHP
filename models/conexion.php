<?php
require_once("config/config.php");

class Conexion{

	public static  function conexio(){
		//$connect = "mysql:host=".db_host.";dbname=".db_name.";charset=".db_charset;
		/*$conect = new PDO("mysql:host=".db_host.";dbname=".db_name, db_user, db_password);
		$conect->exec("set names utf8");*/
		$mysql = new mysqli(db_host, db_user, db_password, db_name);
		$mysql -> set_charset(db_charset);

		if(mysqli_connect_errno()){
			echo 'Error en la Conexión'.mysqli_connect_errno();
		}else{
			//echo 'Conexion exitosa';
		}

		return $mysql;
	}
}

//print_r(Conexion::conexio());

?>