<?php
	
	include ("conexion.php");
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$cedula = $_POST['ced'];
	$departamento = $_POST['departamento'];
	$fecha = $_POST['fecha'];
	
	$query = "INSERT INTO tabla_system(nombre, apellido,ced, departamento,fecha) VALUES ('$nombre','$apellido','$cedula','$departamento','$fecha')";
	$resultado = $conexion->query($query);

	if ($resultado) {
		header("location: visualizar.php");
	}
	else{
		echo "no se logro insertar ";
	}
?>