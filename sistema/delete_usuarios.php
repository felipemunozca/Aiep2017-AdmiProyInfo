<?php

include ("conexion.php");
/*Recibe los valores desde el formulario nuevo_incidente desde name="xxxxx"*/

	$run2= $_REQUEST['usu_rut'];

	$consulta = "DELETE FROM usuarios WHERE usu_rut='$run2' ";
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
				<h3>Se eliminaron los datos correctamente</h3>
				<p><a href='tabla_incidentes.php' class='btn btn-success'>Volver a Inicio</a></p>
					";
			} else {
				echo "
				<h3>Se produjo un error al eliminar los datos</h3>
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