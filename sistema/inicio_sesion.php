<!DOCTYPE html>
<html lang="es">
<head>
	<title>INICIO DE SESION</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php include '../inc/head_common.php'; ?>
	<link rel="stylesheet" href="../css/sistema.css">
</head>

<body id="fondo-oscuro">
<br>
	<div class="container">
		<div class="row">
			<div class="col-xs-1 col-sm-2 col-md-3">
			</div>
			<div class="col-xs-10 col-sm-8 col-md-6" id="cuadro-blanco">
				<h2>Bienvenido al sistema</h2>
				<h4>Ingrese sus datos:</h4>			
			</div>
			<div class="col-xs-1 col-sm-2 col-md-3">
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">

			<div class="col-xs-1 col-sm-2 col-md-3">
			</div>

			<div class="col-xs-10 col-sm-8 col-md-6" id="cuadro-blanco">
<!-- Metodo para enviar los datos del formulario a la consulta sql -->
				<form class="form-horizontal" action="validar_usuario.php" method="POST">
				  <div class="form-group">
				    <label class="col-sm-3 control-label">R.U.N.:</label>
				    <div class="col-sm-9">
				     	<input type="text" class="form-control" name="rut" id="rut" placeholder="Ej: 12.345.678-9" 
				      	required="required" 
				      	oninput="checkRut(this)" 
				      	maxlength="10"
				      	>
				    </div>
				  </div>

				  <div class="form-group">
				    <label class="col-sm-3 control-label">Contraseña:</label>
				    <div class="col-sm-9">
				      	<input type="password" class="form-control" name="pass" id="pass" placeholder="****" 
				      	required="required" 
				      	maxlength="4"
						onkeypress="soloNumeros();"
				      	>
				    </div>
				  </div>

				  <!--
				  <div class="form-group">
				    <div class="col-sm-offset-2 col-sm-10">
				      <div class="checkbox">
				        <label>
				          <input type="checkbox"> Recordarme
				        </label>
				      </div>
				    </div>
				  </div>
				  -->

				  <div class="form-group">
				    <div class="col-sm-offset-3 col-sm-9">
				      <button type="submit" class="btn btn-primary">Entrar</button>
				    </div>
				  </div>
				</form>
			</div>

			<div class="col-xs-1 col-sm-2 col-md-3">
			</div>
		</div>
	</div>

<footer>
	<div class="container" >
		<div class="row">
			<div class="col-xs-1 col-sm-2 col-md-3">
				
			</div>
			<div class="col-xs-10 col-sm-8 col-md-6" id="salir-sistema">
				<a href="../index.php" class="btn btn-danger">Salir del Sistema</a>
			</div>
			<div class="col-xs-1 col-sm-2 col-md-3">
				
			</div>
		</div>
	</div>
</footer>

	<script src="validarRUT.js"></script>
	<script src="../js/funciones.js" ></script>

	<?php include '../inc/footer_common.php'; ?>
</body>
</html>