<?php 

	session_start();
	if(!$_SESSION['ingreso']){
		header('location:index.php?ruta=ingreso');
		exit();
	}
?>
	<br>
	<h1>EDITAR UN EMPLEADO</h1>

	<form method="post">

		<?php 
			$editar = new EmpleadosC();
			$editar -> EditarEmpleadoC();

			$actualizar = new EmpleadosC();
			$editar -> ActualizarEmpleadoC();
		?>

	</form>

