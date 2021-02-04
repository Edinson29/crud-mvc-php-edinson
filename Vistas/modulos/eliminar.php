<?php 

	session_start();
	if(!$_SESSION['ingreso']){
		header('location:index.php?ruta=ingreso');
		exit();
	}

	$eliminar = new EmpleadosC();
	$eliminar -> EliminarEmpleadoC();
?>