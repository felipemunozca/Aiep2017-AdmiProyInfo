<?php 

	include ("conexion.php");

	date_default_timezone_set('America/Santiago');
	//echo "Hoy es dia ".date("d-m-Y"). " y la hora es ".date("h:i:s");

	$rut = $_POST['rut'];
	$nomb2 = $_POST['nomb2'];
	//$fech2 = $_POST['fech2'];
	//$hora2 = $_POST['hora2'];
	$fech2 = date('d-m-Y');
	$hora2 = date('h:i:s');
	$inci2 = $_POST['inci2'];
	$Imagen = addslashes(file_get_contents($_FILES['Imagen']['tmp_name']));
/*
	$query = "INSERT INTO justificacion (jus_rut, jus_nombre, jus_fecha, jus_hora, jus_detalle) 
			  VALUES ('$rut','$nomb2','".$fech2."','".$hora2."','$inci2')";
*/		  
	$consulta = "INSERT INTO justificacion(jus_rut, jus_nombre, jus_fecha, jus_hora, jus_detalle, jus_imagen) 
			     VALUES ('$rut','$nomb2','$fech2','$hora2','$inci2','$Imagen')";

	$resultado = $conexion->query($consulta);

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
/*** MENSAJE INDICANDO QUE SE GUARDARON LOS DATOS ***/
						echo "
						<h3>Se guardaron los datos correctamente</h3>
						<p><a href='tabla_incidentes.php' class='btn btn-success'>Volver a Inicio</a></p>
							";
					} else {
/*** MENSAJE INDICANDO QUE SE PRODUJO UN ERROR ***/
						echo "
						<h3>Se produjo un error al guardar los datos</h3>
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