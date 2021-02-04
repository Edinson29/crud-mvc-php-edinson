<?php 

	class Modelo{

		static public function RutasModelo($rutas){
			if($rutas == 'registrar' || $rutas == 'empleados' || $rutas == 'editar' || $rutas == 'eliminar' || $rutas == 'salir'){
				$pagina = "Vistas/modulos/".$rutas.".php";
			}else if($rutas == 'index'){
				$pagina = 'Vistas/modulos/empleados.php';
			}else{
				$pagina = 'Vistas/login.php';
			}
			return $pagina;
		}
	}
?>