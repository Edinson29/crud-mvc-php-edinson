<?php 
	require_once('conexionbd.php');
	class AdminM extends ConexionBD{

		static public function IngresoM($datosC, $tablaBD){
			$query = ConexionBD::conexion()->prepare("SELECT usuario, clave from $tablaBD Where usuario = :usuario");
			$query -> execute(array(':usuario' => $datosC['usuario']));
			return 	$query->fetch();
			$query -> close();
		}
	}
?>