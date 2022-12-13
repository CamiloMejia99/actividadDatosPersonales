<!DOCTYPE html >
<html lang="en"> 
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ACTIVIDAD 2</title>
	<link href="https://fonts.googleapis.com/css2?family=Tiro+Devanagari+Hindi&display=swap" rel="stylesheet">
	<link rel="icon" type="image/x-icon" href="img/icon_pag.png">
	<link href="/path/print.css" media="print" rel="stylesheet" />
	<link rel="stylesheet" href="css/diseño1.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
	integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk"
	crossorigin="anonymous"></script>
	<script type="text/javascript" src="bootstrap-5.2.0-beta1-dist/js/bootstrap.min,js"></script>
	

	<br>

	<style>
		body {
			background-image: url(img/fondo1.png);
			background-size: cover;
		}
	</style>

</head>

<body>
	<font color="white">
		<div class="container" >
			<div class="row">
				<div class="col-8">
					<h6>UNIVERSIDAD DE NARIÑO EXTENSIÓN IPIALES</h6>
					<h6>DESARROLLADO POR:</h6>
					<h6>IVAN CAMILO MEJIA PARRA</h6>
					<h6>JESUS DAVID ERAZO REINA</h6>
				</div>
				<div class="col-4">
					<img heigth="100" width="100"src="img\udenar.png" alt="No hay imagen" >
				</div>
			</div>
		</div>
		<br>
	</font>		
	<div class="divisor"></div>

	<div id="contenedorp" class="container, col-12" ><!--inicio contenedor principal class="d-flex align-items-center"-->
		<div class="row">
			<center>
				<div id="contenedor2"class="col-8">
					<div class="card border-info" >
						<div class="card-body" >
							<ul class="list-group list-group-light">
								<li class="list-group-item">	
									<div class="container">
										<div class="row">
											<div class="col-12">
												<h5>Datos Personales</h5>
												<center>

																<form action="proceso_registro.php" method="POST">
														              <div class="card-body">

														              	<div class="form-group">
														                  <label for="txt_pNombre">Primer Nombre</label>
														                  <input type="text" class="form-control" id="txt_pNombre"  name="txt_pNombre" placeholder="Primer Nombre">
														                </div>

														                <div class="form-group">
														                  <label for="txt_sNombre">Segundo Nombre</label>
														                  <input type="text" class="form-control" id="txt_sNombre"  name="txt_sNombre" placeholder="Segundo Nombre">
														                </div>

														                <div class="form-group">
														                  <label for="txt_pApellido">Primer Apellido</label>
														                  <input type="text" class="form-control" id="txt_pApellido"  name="txt_pApellido" placeholder="Primer Apellido">
														                </div>

														                <div class="form-group">
														                  <label for="txt_sApellido">Segundo Apellido</label>
														                  <input type="text" class="form-control" id="txt_sApellido"  name="txt_sApellido" placeholder="Segundo Apellido">
														                </div>

														                <div class="form-group">
														                  <label for="txt_edad">Edad</label>
														                  <input type="text" class="form-control" id="txt_edad"  name="txt_edad" placeholder="Edad">
														                </div>

														                <div class="form-group">
														                  <label for="txt_ciudad">Ciudad</label>
														                  <input type="text" class="form-control" id="txt_ciudad"  name="txt_ciudad" placeholder="Ciudad">
														                </div>
														              <!-- /.card-body -->
														              <div class="card-footer">
														                <button type="submit" class="btn btn-success">
														                  añadir
														                </button>
														                
														              </div>
														            </form>
																</div>
															</td>
														</tr>
													</table>
												</center>
											</div>	
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</center>
		</div>

	</div>	<!--fin contenedor principal-->
<!--hola-->
	<script type="text/javascript" src="js/functions.js"></script>
</body>
</html>




							
								