	<?php
	require_once("config/config.php"); 

	class Persona 
	{
		public static function registraPersona(){
			if($_POST){
				if(empty($_POST['txtNombre']) || empty($_POST['txtApellido']) ||
					empty($_POST['numTelefono']) || empty($_POST['txtEmail'])){	
					echo '<div class="alert alert-warning text-center">
				Todos los Campos son Obligatorios.
				</div>';
			}else{

				$nombre = $_POST['txtNombre'];
				$apellido = $_POST['txtApellido'];
				$telefono = $_POST['numTelefono'];
				$email= $_POST['txtEmail'];

				$res_insert = UsuariosModel::insertPersona($nombre, $apellido, $telefono, $email);
					/*print_r($res_insert);
					die();*/
					if($res_insert){
						echo '<div class="alert alert-success text-center">
						Registro Guardado Correctamente.
						</div>';
					}else{
						echo '<div class="alert alert-danger text-center">
						Error al Guardar los Datos o el Correo ya Existe.
						</div>';
					}

				}
			}
		}
		public static function listarPersonas(){

			$res_gets =  UsuariosModel::getPersonas();
			return $res_gets;
		}
		public static function getActualizarPersona(){
			if(!empty($_REQUEST)){
				$actualiza_id = intval($_REQUEST['id']);
			$res_get =  UsuariosModel::getPersona($actualiza_id);
			return $res_get;
		}
	}	

	public static function actualizarPersona(){
			if($_POST){
				if(empty($_POST['txtNombre']) || empty($_POST['txtApellido']) ||
					empty($_POST['numTelefono']) || empty($_POST['txtEmail'])){	
					echo '<div class="alert alert-warning text-center">
				Todos los Campos son Obligatorios.
				</div>';
			}else{
				$actualiza_id = intval($_GET['id']);
				$nombre = $_POST['txtNombre'];
				$apellido = $_POST['txtApellido'];
				$telefono = $_POST['numTelefono'];
				$email= $_POST['txtEmail'];

				$res_update = UsuariosModel::updatePersona($actualiza_id, $nombre, $apellido, $telefono, $email);
					/*print_r($res_update);
					die();*/
					if($res_update){
						echo '<div class="alert alert-success text-center">
						Registro Actulizado Correctamente.
						</div>';
					}else{
						echo '<div class="alert alert-danger text-center">
						Error al Actualizar los Datos o el Correo ya Existe.
						</div>';
					}

				}
			}
		}
}
?>