<?php 

	session_start();
	session_destroy();
	header('location:Vistas/login.php');
?>
	<br>
	<h1>Haz cerrado sesión</h1>