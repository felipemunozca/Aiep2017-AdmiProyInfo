<?php 
	require('conexion.php');
/*** CONSULTA SQL QUE RESCATA LOS DATOS DESDE LA TABLA Y LOS MUESTRA DEL ULTIMO EN ADELANTE ***/
	$consulta="SELECT * FROM justificacion ORDER BY jus_codigo DESC;";

    $resultado= $conexion->query($consulta);
 ?>
<?php

/*** ESTABLECER LA HORA LOCAL AL HORARIO DE CHILE ***/
setlocale(LC_TIME,"es_CL");
		
echo strftime("Hoy es %A y son las %H:%M <br>");
echo strftime("El año es %Y y el mes es %B");
  ?>

<!DOCTYPE html>
<html lang="es">
<head>
	<title>BIENVENIDO</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include ('../inc/head_common.php') ?>
	<link rel="stylesheet" href="css/sistema.css">
</head>

<body>
    <?php include 'sis_header.php'; ?>
<div class="container">
	<div class="panel panel-primary">
		<div class="row">
			<div class="col-xs-12">
				<p><?php echo date('d/m/Y'); ?></p>
				<p><?php echo time('G/i/s'); ?></p>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-xs-12">
			<h2>Incidentes informados</h2>
			<div class="table-responsive">
  				<table class="table">
    				<thead>
    					<tr>
    						<th>#</th>
    						<th>RUN</th>
    						<th>Nombre</th>
    						<th>Fecha</th>
    						<th>Hora</th>
    						<th>Incidente</th>
    						<th>Imagen</th>
    					</tr>
    				</thead>
    				<tbody>
<!-- TABLA EN DONDE SE MUESTRAN LOS INCIDENTES QUE HAN SIDO ALMACENADOS EN LA BASE DE DATOS -->
    					<?php while ($row=$resultado->fetch_assoc()) { ?>
    						<tr>
    							<td>
									<?php echo $row['jus_codigo']; ?>
    							</td>
    							<td>
    								<?php echo $row['jus_rut']; ?>
    							</td>
    							<td>
    								<?php echo $row['jus_nombre']; ?>
    							</td>
    							<td>
    								<?php echo $row['jus_fecha']; ?>
    							</td>
    							<td>
    								<?php echo $row['jus_hora']; ?>
    							</td>
    							<td>
    								<?php echo $row['jus_detalle'] ?>
    							</td>
    							<td>
    								<?php echo $row['jus_imagen']; ?>
    							</td>
    						</tr>
    					<?php } ?>
    				</tbody>
 				 </table>
			</div>
		</div>
	</div>
</div>



	<?php include '../inc/footer_common.php'; ?>
</body>
</html>