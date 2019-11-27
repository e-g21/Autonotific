<?php
	
	include ("conexion.php");

	$id = $_REQUEST['id'];
	
	$query = "DELETE  FROM tabla_system WHERE id = '$id'";
	$resultado = $conexion->query($query);

	if ($resultado) {
		
		header("location: visualizar.php");
	}
	else{
		echo "no se logro  ";
	}
?>