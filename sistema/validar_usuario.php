<?php 

	session_start();

	include ("conexion.php");

	$rut = $_POST['rut'];
	$pass = $_POST['pass'];
	
	$consulta = "SELECT * FROM usuarios WHERE usu_rut='$rut' AND usu_password='$pass'";
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
					
					<?php 
						//if ($row = $resultado->fetch_assoc())
						if ($row = mysqli_fetch_assoc($resultado))
					{
						//$_SESSION['u.usuario'] = $usuario;
						//$_SESSION['usu_rut'] = $row['usu_rut'];
    					$_SESSION['usu_rut'] = $row['usu_rut'];
    					$_SESSION['usu_nombre'] = $row['usu_nombre'];
    					$_SESSION['usu_apellido'] = $row['usu_apellido']; 
						header("Location: tabla_incidentes.php");
						//header("Location: sis_header.php");
					} 	else {
						echo "
						<h3>Los datos ingresados no son correctos</h3>
						<h3>Favor de volver a intentarlo.</h3>
						<h5>Si el problema persiste, pongase en contacto con el administrador del sistema.</h5>
						<p><a href='inicio_sesion.php' class='btn btn-danger'>Volver Atras</a></p>
							";
					}
					?>

					<?php 
					/*
						if ($row = mysqli_fetch_assoc($resultado))
					{
						$_SESSION['usu_rut'] = $row['usu_rut'];
    					$_SESSION['usu_nombre'] = $row['usu_nombre'];
    					$_SESSION['usu_apellido'] = $row['usu_apellido']; 
						header("Location: formulario_incidente.php");
					} 	
					*/
					?>

				</div>
				<div class="col-sm-3 col-xs-1">
				</div>
			</div>
		</div>
	</body>
</html>