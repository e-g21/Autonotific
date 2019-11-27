<?php
	
	include ("conexion.php");

	$id = $_REQUEST['id'];
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$cedula = $_POST['ced'];
	$departamento = $_POST['departamento'];
	$fecha = $_POST['fecha'];
	$query = "UPDATE tabla_system SET nombre='$nombre', apellido ='$apellido', ced='$cedula', departamento='$departamento', fecha='$fecha' WHERE id='$id'";
	$resultado = $conexion->query($query);

	if ($resultado) {
		//echo "modificado";
		header("location: mostrar.php");
	}
	else{
		echo "no se logro  ";
	}
?>