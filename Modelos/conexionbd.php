<?php 

	class ConexionBD{

		public function conexion(){
			try {
				$conexion = new PDO("mysql:host=localhost;dbname=crud_udemy", 'root', '');
				return $conexion;
			} catch (Exception $e) {
				return $e->getMessage();
			}
		}
	}
?>