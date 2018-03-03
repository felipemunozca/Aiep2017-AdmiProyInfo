<?php 

	include ("conexion.php");
/*Recibe los valores desde el formulario nuevo_usuario desde name="xxxxx"*/
	$run2= $_POST['rut'];
	$nomb2= $_POST['nomb2'];
	$apel2= $_POST['apel2'];
	$pass2= $_POST['pass2'];
	$tipo_cargo= $_POST['tipo_cargo'];
	$tele2= $_POST['tele2'];

	#$consulta = "INSERT INTO usuarios ('usu_rut', 'usu_nombre', 'usu_apellido') VALUES ('$run2','$nomb2','$apel2')";
	$consulta = "INSERT INTO usuarios (usu_rut, usu_nombre, usu_apellido, usu_password, usu_cargo, usu_telefono) 
				 VALUES ('$run2','$nomb2','$apel2','$pass2','$tipo_cargo','$tele2')";
	$resultado= $conexion->query($consulta);
?>	

		<!DOCTYPE html>
			<html lang="es">
			<head>
				<title></title>
				<meta charset="UTF-8">
				<meta name="viewport" content="width=device-width, initial-scale=1.0">
				<?php include '../inc/head_common.php'; ?>
				<link rel="stylesheet" href="../css/sistema.css">
			</head>
			<body id="fondo-oscuro">
			<br>
				<div class="container" >
					<div class="row">
						<div class="col-sm-3 col-xs-1">
							
						</div>

						<div class="col-sm-6 col-xs-10" id="cuadro-blanco">
						<?php if ($resultado) {
							echo "
							<h3>Se guardaron los datos correctamente.</h3>
							<p><a href='tabla_incidentes.php' class='btn btn-success'>Volver a Inicio</a></p>
								";
						} else {
							echo "
							<h3>Se produjo un error al guardar los datos.</h3>
							<h4>Revise que el usuario que esta registrando no se encuentre ya en el sistema.</h4>
							<p><a href='tabla_incidentes.php' class='btn btn-danger'>Volver a Inicio</a></p>
								";
						}
						 ?>					
							
						</div>
						<div class="col-sm-3 col-xs-1">
							
						</div>
					</div>
				</div>
			</body>
			</html>