<?php 
    session_start();
    if (@!$_SESSION['usu_rut']){
        header("");
    }
    if (@!$_SESSION['usu_nombre']){
        header("");
    }
    if (@!$_SESSION['usu_apellido']) {
        header("");
    }
 ?>

<?php 
	require('conexion.php');

	$consulta="SELECT * FROM justificacion ORDER BY jus_codigo DESC;";
    $resultado= $conexion->query($consulta);
 ?>


<!DOCTYPE html>
<html lang="es">
<head>
	<title>BIENVENIDO</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php include '../inc/head_common.php'; ?>
	<link rel="stylesheet" href="../css/sistema.css">
</head>

<body id="fondo-oscuro">

<?php //include 'sis_header.php'; ?>


<header id="main-header">
    <div class="container">
        <div class="row" >
            <div class="col-xs-12" id="banner-sistema">
                <label>Sistema Respaldo de Decisiones</label>
            </div>
        </div>
<div id="linea-color"></div>
        <div class="row">
            <div class="col-xs-4 col-sm-3" id="nombre-usuario">
                   <h4>
                   Bienvenido: 
                   <strong><?php echo $_SESSION['usu_nombre']." ".$_SESSION['usu_apellido'];?>
                   </strong>
                   </h4> 
                   <h4 class="hidden"><?php echo $_SESSION['usu_rut'];?></h4>
            </div>
            <div class="col-xs-8 col-sm-9">
                <ul id="main-menu" class="nav nav-pills hidden-xs">
                    <li><a href="tabla_incidentes.php">Inicio</a></li>
                    <li><a href="formulario_incidente.php">Nuevo incidente</a></li>
                    <li><a href="formulario_usuario.php">Nuevo usuario</a></li>
                    <li><a href="tabla_usuarios.php">Lista de usuarios</a></li>
                    <li><a href="cerrar_sesion.php">Cerrar sesion</a></li>
                </ul>
                <a href="#" id="mobile-menu-button" class="btn btn-default visible-xs">
                    <span class="glyphicon glyphicon-th-list"></span>
                </a>
            </div>
        </div>
<div id="linea-color"></div>
    </div>
    <div class="visible-xs">
                <ul id="mobile-main-menu">
                    <li><a href="tabla_incidentes.php">Inicio</a></li>
                    <li><a href="formulario_incidente.php">Nuevo incidente</a></li>
                    <li><a href="formulario_usuario.php">Nuevo usuario</a></li>
                    <li><a href="tabla_usuarios.php">Lista de usuarios</a></li>
                    <li><a href="cerrar_sesion.php">Cerrar sesion</a></li>              
                </ul>
    </div>
</header>

<br>

<div class="container" >
	<div class="row">
		<div class="col-xs-12" id="cuadro-blanco">
			<h2>Incidentes informados</h2>
			<div class="table-responsive">
  				<table class="table" border="2" id="cuadro-blanco">
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
    					<?php while ($row = $resultado->fetch_assoc()) { ?>
    					<tr>
    						<td><?php echo $row['jus_codigo']; ?></td>
    						<td><?php echo $row['jus_rut']; ?></td>
    						<td><?php echo $row['jus_nombre']; ?></td>
    						<td><?php echo $row['jus_fecha']; ?></td>
    						<td><?php echo $row['jus_hora']; ?></td>
    						<td><?php echo $row['jus_detalle'] ?></td>
    						<td class="lb-outerContainer">
                                <img height="50px" src="data:image/jpg;base64,<?php echo base64_encode($row['jus_imagen']); ?>">
                            </td>
<!--                             <td>
                                <a class="single-image" href="../img/patio.jpg" title="Ubuntu Computer">
                                <img src="../img/patio.jpg" alt=""/>
                                </a>
                            </td> -->
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