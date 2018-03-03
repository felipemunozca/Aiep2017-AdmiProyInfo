<?php

include ("conexion.php");
/*Recibe los valores desde el formulario nuevo_incidente desde name="xxxxx"*/

	$run2= $_REQUEST['usu_rut'];
	$nomb2= $_POST['nomb2'];
	$apel2= $_POST['apel2'];
	$pass2= $_POST['pass2'];
	$tipo_cargo= $_POST['tipo_cargo'];
	$tele2= $_POST['tele2'];
				//UPDATE `usuarios` SET `usu_rut`=[value-1],``=[value-2],``=[value-3],``=[value-4],``=[value-5],``=[value-6] WHERE 1
  //$consulta = "UPDATE usuarios SET usu_nombre='$nomb2', usu_apellido='$apel2', usu_password='$pass2' usu_cargo='$tipo_cargo', usu_telefono='$tele2' WHERE ='$run2' ";
	$consulta = "UPDATE usuarios SET usu_nombre='$nomb2', usu_apellido='$apel2', usu_password='$pass2', usu_cargo='$tipo_cargo',usu_telefono='$tele2' WHERE usu_rut='$run2' "; 
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
				<h3>Se actualizaron los datos correctamente</h3>
				<p><a href='tabla_incidentes.php' class='btn btn-success'>Volver a Inicio</a></p>
					";
			} else {
				echo "
				<h3>Se produjo un error al modificar los datos</h3>
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