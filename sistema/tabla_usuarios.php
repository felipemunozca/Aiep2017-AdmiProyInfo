<?php 
	include ('conexion.php');

	$consulta="SELECT * FROM usuarios";
	/*
	/$resultado=$mysqli->query($consulta);
	 */
	$resultado= $conexion->query($consulta);
 ?>

<!DOCTYPE html>
<html lang="es">
<head>
	<title>LISTA DE USUARIOS</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php include '../inc/head_common.php'; ?>
	<link rel="stylesheet" href="../css/sistema.css">
</head>
<body id="fondo-oscuro">
<br>
	<div class="container">
		<div class="row">
			<div class="col-xs-12" id="cuadro-blanco">
				<h2>Usuarios del Sistema</h2>
				<h4>Listado de trabajadores registrados</h4>
				<div class="table-responsive">
	  				<table class="table" border="1">
	    				<thead>
	    					<tr>
	    						<th>RUN</th>
	    						<th>Nombre</th>
	    						<th>Apellido</th>
	    						<th>Cargo</th>
	    						<th>Telefono</th>
	    						<th colspan="2">Opciones</th>
	    					</tr>
	    				</thead>
	    				<tbody>
	    					<?php while ($row=$resultado->fetch_assoc()) { ?>
	    						<tr>
	    							<td><?php echo $row['usu_rut']; ?></td>
	    							<td><?php echo $row['usu_nombre']; ?></td>
	    							<td><?php echo $row['usu_apellido']; ?></td>
	    							<td><?php echo $row['usu_cargo']; ?></td>
	    							<td><?php echo $row['usu_telefono']; ?></td>
	    							<td><a href="form_modificar_usuario.php?usu_rut=<?php echo $row['usu_rut'];?>">Modificar</a></td>
	    							<td><a href="delete_usuarios.php?usu_rut=<?php echo $row['usu_rut'];?>">Eliminar</a></td>
	    							<!--
	    							<td><a href="javascript:window.print()"> Imprimir</a></td>
	    							-->
	    						</tr>
	    					<?php } ?>
	    				</tbody>
	 				 </table>
				</div>
			</div>
		</div>
	</div>

<footer>
	<div class="container" >
		<div class="row">
			<div class="col-xs-12" id="pie-pagina">
				<a href="tabla_incidentes.php" class="btn btn-warning">Volver a Inicio</a>
			</div>
		</div>
	</div>
</footer>

</body>
</html>