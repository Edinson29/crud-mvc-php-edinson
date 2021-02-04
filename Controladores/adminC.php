<?php
	class AdminC{

		public function IngresoC(){
			if(isset($_POST['usuario'])){
				$datosC = array(
					'usuario' => $_POST['usuario'],
					'clave' => $_POST['clave']			
				);

				$tablaBD = 'administradores';

				$respuesta = AdminM::IngresoM($datosC, $tablaBD);

				if($respuesta['usuario'] == $datosC['usuario'] && $respuesta['clave'] == $datosC['clave']){
					session_start();

					$_SESSION['ingreso'] = true;
					header("location: ../index.php");
				}else{
					echo 'Error al ingresar';
				}
			}
		}
	}



?>