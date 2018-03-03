<?php

include ("conexion.php");
/*Recibe los valores desde el formulario nuevo_incidente desde name="xxxxx"*/
	$run= $_POST['jus_run'];
	$nomb= $_POST['jus_run'];
	$fech= $_POST['jus_run'];
	$hora= $_POST['jus_run'];
	$inci= $_POST['jus_run'];
	$imag= $_POST['jus_run'];

	$consulta = "INSERT INTO justificacion (jus_run, nomb, fech, hora, inci, imag) VALUES ('$run','$nomb','$fech','$hora','$inci','$imag')";
	$resultado= $conexion->query($consulta);
	
	if ($resultado) {
		echo "Se guardo exitosamente";
	}
	else {
		echo "No se pudo guardar";
	}

?>

