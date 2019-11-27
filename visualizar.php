<html>
<head>

	<link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="assets/css/main-index.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
	
	<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.min.css" rel="stylesheet"/>

	<link rel="stylesheet" type="text/css" href="font-awesome/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="./assets/css/animate.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
	<body>
		<div class="site-wrap">
			<!--menu-->
			<div class="site-navbar mt-4">
        		<div class="container py-1">
          			<div class="row align-items-center">
            			<div class="col-4 col-md-4 col-lg-8 mover">
              				<nav class="site-navigation text-right text-md-right" role="navigation">
                				<ul class="site-menu js-clone-nav d-none d-lg-block">
                  				<li class="active"><a href="index.php">Home</a></li>
                  				<li><a href="about.html">About</a></li>
                  				<li><a href="news.html">News</a></li>
                  				<li><a href="contact.html">Contact</a></li>
                				</ul>
              				</nav>
            			</div>
          			</div>
        		</div>
      		</div>
			<!--fin menu-->
    		<!--header-->
       		<div class="site-blocks-cover inner-page-cover overlay" 
       			style="background-image: url('images/hero_bg_1.jpg');"data-aos="fade"data-stellar-background-ratio="0.5" data-aos="fade">
    			<div class="container">
      				<div class="row align-items-center justify-content-center">
        				<div class="col-md-7 text-center" data-aos="fade-up" data-aos-delay="400">
          					<h1 class="text-white">AutoNotific</h1>
          					<p>Bienvenidos</p>
        				</div>
      				</div>
    			</div>
  			</div>
  			<!--fin header-->
		</div>
		<div class="site-footer posi">
<h3 class="footer-heading color mb-4">Agregar</h3>
</div>
		<!-- Button to Open the Modal -->
		<button type="button" class= "btn btn-primary btn-ed" data-toggle="modal" data-target="#myModal"><strong class="ed">+</strong></button>
		
		<!-- The Modal -->
		<div class="modal fade" id="myModal">
  			<div class="modal-dialog">
    			<div class="modal-content">
      				<!-- Modal Header -->
      				<div class="modal-header">
        				<h4 class="modal-title">Agregar Datos Cliente</h4>
        				<button type="button" class="close" data-dismiss="modal">&times;</button>
      				</div>
      				<!-- FIN Modal Header -->
      				<!-- Modal body -->
      				<div class="modal-body"> 
      					<center>
      						<!--fORMULARIO-->
							<form action="proceso_guardar.php" method="post" enctype="multipart/form-data"> 
								<div class="form-group">
      								<label for="validation01">Nombre</label>
     								 <input type="text" class="form-control is-valid" id="validation01" placeholder="Nombre" name="nombre" required>
  								</div>
								<div class="form-group">
      								<label for="validation01">Apellido</label>
     								 <input type="text" class="form-control is-valid" id="validation01" name="apellido" placeholder="Apellido" required>
  								</div>
								<div class="form-group">
      								<label for="validation01">Cedula</label>
     								 <input type="number" class="form-control is-valid" id="validation01" name="ced" placeholder="Cedula" required>
  								</div>
								<div class="form-group">
      								<label for="validation01">Departamento</label>
     								 <input type="text" class="form-control is-valid" id="validation01" name="departamento" placeholder="Nombre" required>
  								</div>
  								<label for="start">Start date:</label>

									<input type="date" id="start" name="fecha"value="2019-07-22"min="2018-01-01" max="2018-12-31">
  								<!--<div class="form-group">
      								<label for="validation01">Fecha</label>
     								 <input type="text" class="form-control is-valid" id="validation01" name="fecha" placeholder="Fecha" required>
  								</div>-->
  								
								<input type="submit" class="btn btn-primary" name=""  value="aceptar">
							</form>
							<!--FIN DEL FORMULARIO-->
						</center>
      				</div>
      				<!-- FIN Modal body -->
      				<!-- Modal footer -->
      				<div class="modal-footer">
        				<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      				</div>
      				<!-- FIN Modal footer -->
    			</div>
    			<!--Fin de modal-content-->
  			</div>
  			<!--FIN de Modal-dialog-->
		</div>
		<!-- FIN The Modal -->

		<div class="container">
      <div class="animated fadeInDown featured-property-half d-flex">
        <table class="table table-striped"  colspan="2" id="tabla-dinamic">
					<thead>
						</tr>
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
					<tbody>
				
				<?php
				include("conexion.php");
				$query = "SELECT * FROM tabla_system";
				$resultado = $conexion->query($query);
				while ($row = $resultado->fetch_assoc()) {
					?>
					<tr>
						<td><?php echo $row['id']; ?></td>
						<td><?php echo $row['nombre']; ?></td>
						<td><?php echo $row['apellido']; ?></td>
						<td><?php echo $row['ced']; ?></td>
						<td><?php echo $row['departamento']; ?></td>
						<td><?php echo $row['fecha']; ?></td>
						<th>



							<a class="btn btn-primary" href="modificar.php?id=<?php echo $row['id']; ?> "-->Modificar


						</a>

						</th>
						<th><a class="btn btn-primary" href="eliminar.php?id=<?php echo $row['id']; ?>">Eliminar</a></th>

					</tr>
				<?php
					}
				?>
			</tbody>
				</table>
      </div>
    </div>


			<!--inicio de paginacion-->
	<div class="container mt-5" data-aos="fade-up">
      <div class="row">
        <div class="col-md-12 text-center">
          <div class="site-block-27">
            <ul>
              <li><a href="#">&lt;</a></li>
              <li class="active"><span>1</span></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">5</a></li>
              <li><a href="#">&gt;</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--Fin de paginacion-->

		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/bootstrap.min.js">
			
		</script>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>

		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js">
		</script>

	</body>
</html>