<?php 

	class EmpleadosC{

		public function RegistrarEmpleadosC(){
			if(isset($_POST['nombreR'])){
				$datosC = array(
					'nombre' => $_POST['nombreR'],
					'apellido' => $_POST['apellidoR'],
					'email'=> $_POST['emailR'],
					'cargo' => $_POST['cargoR'],
					'salario' => $_POST['salarioR']
				);

				$tablaBD = 'empleados';

				$respuesta = EmpleadosM::RegistroEmpleadosM($datosC, $tablaBD);

				if($respuesta == 'Bien'){
					header('location:index.php?ruta=empleados');
				}else{
					echo 'Error';
				}
			}
		}

		public function MostrarEmpleadosC(){
			$tablaBD = 'empleados';
			$respuesta = EmpleadosM::MostrarEmpleadosM($tablaBD);

			foreach ($respuesta as $empleado) {
				echo '    
					<tr>
						<td>'.$empleado['id_empleado'].'</td>
						<td>'.$empleado['nombre'].'</td>
						<td>'.$empleado['apellido'].'</td>
						<td>'.$empleado['email'].'</td>
						<td>'.$empleado['cargo'].'</td>
						<td>'.$empleado['salario'].'</td>

						<td><a class="editar" href="index.php?ruta=editar&id='.$empleado['id_empleado'].'"<button >Editar</button></a></td>

						<td><a href="index.php?ruta=eliminar&id='.$empleado['id_empleado'].'"<button class="eliminar">
							Borrar</button></a></td>
					</tr>
				';
			}	
		}

		public function EditarEmpleadoC(){
			$datosC = $_GET['id'];
			$tablaBD = 'empleados';

			$respuesta = EmpleadosM::EditarEmpleadoM($datosC, $tablaBD);

			echo ' 
				<input type="hidden" name="idE" value='.$respuesta['id_empleado'].' > 

				<input type="text" placeholder="Nombre" name="nombreE" value='.$respuesta['nombre'].' required>

				<input type="text" placeholder="Apellido" name="apellidoE" value='.$respuesta['apellido'].' required>

				<input type="email" placeholder="Email" name="emailE" value='.$respuesta['email'].' required>

				<input type="text" placeholder="Cargo" name="cargoE" value='.$respuesta['cargo'].' required>

				<input type="text" placeholder="Salario" name="salarioE" value= '.$respuesta['salario'].' required>

				<input type="submit" value="Actualizar">

			';
		}

		public function ActualizarEmpleadoC(){
			if(isset($_POST['nombreE'])){
				$datosC = array(
					'id' => $_POST['idE'],
					'nombre' => $_POST['nombreE'],
					'apellido' => $_POST['apellidoE'],
					'email' => $_POST['emailE'],
					'cargo' => $_POST['cargoE'],
					'salario' => $_POST['salarioE']
				);

				$tablaBD = 'empleados';

				$respuesta = EmpleadosM::ActualizarEmpleadoM($datosC, $tablaBD);

				if($respuesta == 'Bien'){
					header('location:index.php?ruta=empleados');
				}else{
					echo $respuesta;
				}
			}
		}

		public function EliminarEmpleadoC(){
			$datosC = $_GET['id'];
			$tablaBD = 'empleados';

			$respuesta = EmpleadosM::EliminarEmpleadoM($datosC, $tablaBD);

			if($respuesta == 'Bien'){
				header('location:index.php?ruta=empleados');
			}else{
				echo $repuesta;
			}
		}
	}
?>