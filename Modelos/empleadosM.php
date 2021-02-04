<?php 
	require_once('conexionbd.php');
	class EmpleadosM extends ConexionBD{

		static public function RegistroEmpleadosM($datosC, $tablaBD){
			$query = ConexionBD::conexion()->prepare("INSERT INTO empleados(nombre, apellido, email, cargo,
				salario) VALUES(:nombre, :apellido, :email, :cargo, :salario) ");
			$queryOk = $query -> execute(array(
				':nombre' => $datosC['nombre'],
				':apellido' => $datosC['apellido'],
				':email' => $datosC['email'],
				':cargo' => $datosC['cargo'],
				':salario' => $datosC['salario']
			));
			if ($queryOk){
				return 'Bien';
			}else{
				return 'Error';
			}

			$query -> close();
		}

		static public function MostrarEmpleadosM($tablaBD){
			$query = ConexionBD::conexion() -> prepare("SELECT * FROM $tablaBD");
			$query -> execute();
			return $query -> fetchAll();
			$query -> close();
		}

		static public function EditarEmpleadoM($datosC, $tablaBD){
			$query = ConexionBD::conexion() -> prepare("SELECT * FROM $tablaBD WHERE id_empleado = $datosC");
			$query -> execute();

			return $query -> fetch();
			$query -> close();
		}

		static public function ActualizarEmpleadoM($datosC, $tablaBD){
			$query = ConexionBD::conexion() -> prepare("UPDATE $tablaBD SET nombre = :nombre, apellido = :apellido,
				email = :email, cargo = :cargo, salario = :salario WHERE id_empleado = :id");
			$queryOk = $query -> execute(array(
				':id' => $datosC['id'],
				':nombre' => $datosC['nombre'],
				':apellido' => $datosC['apellido'],
				':email' => $datosC['email'],
				':cargo' => $datosC['cargo'],
				':salario' => $datosC['salario']
			));

			if($queryOk){
				return 'Bien';
			}else{
				return 'Error en el query';
			}
			$query -> close();
		}

		static public function EliminarEmpleadoM($datosC, $tablaBD){
			$query = ConexionBD::conexion() -> prepare("DELETE FROM $tablaBD WHERE id_empleado = $datosC");
			if($query -> execute()){
				return 'Bien';
			}else{
				return 'Error en el query';
			}
			$query -> close();
		}
	}
?>