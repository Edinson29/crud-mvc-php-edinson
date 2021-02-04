<?php 
	require('../Controladores/adminC.php');
	require('../Modelos/adminM.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="css/log.css">
</head>
<body>
	<div>
		<h1>INGRESAR</h1>
		<hr>
		<form method="post" action="">
			
			<input class="input-control" type="text" placeholder="Usuario" name="usuario" required><br>

			<input class="input-control" type="password" placeholder="Contraseña" name="clave" required><br>

			<input type="submit" value="Ingresar" class="login">

		</form>
	</div>
	<?php 
		$ingreso = new AdminC();
		$ingreso -> IngresoC();
	?>
</body>
</html>