<!DOCTYPE html>
<html>
<head>
	<title>Slice Group &mdash;AutoNotific</title>
	<link rel="stylesheet" type="text/css" href="./assets/css/main-index.css">
	<link rel="stylesheet" type="text/css" href="font-awesome/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="./assets/css/animate.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

</head>
<body>
    <?php
		include("conexion.php");
		$id = $_REQUEST['id'];
		$query = "SELECT * FROM tabla_system WHERE id= '$id' ";
		$resultado = $conexion->query($query);
		$row = $resultado->fetch_assoc();
	?>
	<div class="container">
      <div class="animated fadeInDown featured-property-half d-flex">
        <table class="table table-striped"  colspan="2" id="tabla-dinamic">
					<thead>
						<tr>
							<th>id</th>
							<th>Nombre</th>
							<th>Apellido</th>
							<th>Cedula</th>
							<th>Departamento</th>
							<th>Fecha</th>
							<th colspan="2">Operaciones</th>
						</tr>
					</thead>
				
				</table>
				
				<!--fin de la tabla-->
			</div>
			<!--fin contenedor secundario-->
		</div>
		<div class="">
			<form  action="proceso_modificar.php?id=<?php echo $row['id']; ?>" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<input type="text" class="form-control is-valid" REQUIRED name="nombre" value="<?php  echo($row['nombre']); ?>">
				</div>
				<div class="form-group">
					<input type="text" class="form-control is-valid" REQUIRED name="apellido"  value="<?php  echo($row['apellido']); ?>">
				</div>
				<div class="form-group">
					<input type="text"  class="form-control is-valid" REQUIRED name="ced"  placeholder="Cedula" value="<?php  echo($row['ced']); ?>">
				</div>
				<div class="form-group">
					<input type="text" class="form-control is-valid" REQUIRED name="departamento"  placeholder="departamento" value="<?php  echo($row['departamento']); ?>">
				</div>
				<div class="form-group">
					<input type="text" class="form-control is-valid" REQUIRED name="fecha"  placeholder="fecha" value="<?php  echo($row['fecha']); ?>">
				</div>
				
			
				<input action="mostar.php" type="submit" name=""  class="btn btn-primary" value="Guardar">
			</form>
		</div>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>