<?php 
	session_start();
	if(!$_SESSION['ingreso']){
		header('location:Vistas/login.php');
		exit();
	}
?>
	<br>
	<table id="t1" border="1">
		<thead>
			<tr>
				<th>Id</th>
				<th>Nombre</th>
				<th>Apellido</th>
				<th>Email</th>
				<th>Cargo</th>
				<th>Salario</th>
				<th colspan="2">Opciones</th>
			</tr>

		</thead>

		<tbody>
			
			<?php 
				$mostrar = new EmpleadosC();
				$mostrar -> MostrarEmpleadosC();
			?>
		</tbody>

	</table>
