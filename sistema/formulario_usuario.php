<?php 
	include ('conexion.php');

 ?>

<!DOCTYPE html>
<html lang="es">
<head>
	<title>NUEVO USUARIO</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php include ('../inc/head_common.php'); ?>
	<link rel="stylesheet" href="../css/sistema.css">
</head>

<body id="fondo-oscuro">
<br>
	<div class="container">
		<div class="row">
			<div class="col-xs-1 col-sm-2 col-md-3">
			</div>
			<div class="col-xs-10 col-sm-8 col-md-6" id="cuadro-blanco">
				<h2>Registrar un nuevo usuario</h2>
				<h4>Ingrese los datos del empleado:</h4>			
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
				<form class="form-horizontal" action="create_usuario.php" method="POST" name="formulario">
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
				    <label class="col-sm-3 control-label">Nombre:</label>
				    <div class="col-sm-9">
				      <input type="text" class="form-control" name="nomb2" placeholder="Ej: Cristobal" required="required" 
				      onkeypress="soloLetras();">
				    </div>
				  </div>
				  <div class="form-group">
				    <label class="col-sm-3 control-label">Apellido:</label>
				    <div class="col-sm-9">
				      <input type="text" class="form-control" name="apel2" placeholder="Ej: Muñoz" required="required" 
				      onkeypress="soloLetras();" >
				    </div>
				  </div>
				  <div class="form-group">
				    <label class="col-sm-3 control-label">Contraseña:</label>
				    <div class="col-sm-9">
				      <input type="password" class="form-control" name="pass2" placeholder="Ej: ****" required="required" 
				      maxlength="4" onkeypress="soloNumeros();">
				    </div>
				  </div>
				  <div class="form-group">
				    <label class="col-sm-3 control-label">Cargo:</label>
				    <div class="col-sm-9">
						<select name="tipo_cargo" class="form-control">
							<option value="0">Seleccione un cargo</option>
							<option value="Jefatura">Jefatura</option>
							<option value="Administrativo">Administrativo</option>
							<option value="Jefe de campo">Jefe de campo</option>
							<option value="Bodeguero">Bodeguero</option>
							<option value="Trabajador agricola">Trabajador agricola</option>
						</select>
				    </div>
				  </div>
				  <div class="form-group">
				    <label class="col-sm-3 control-label">Telefono:</label>
				    <div class="col-sm-9">
				      <input type="text" class="form-control" name="tele2" placeholder="Ej: 987654321" required="required" 
				      maxlength="9" onkeypress="soloNumeros();">
				    </div>
				  </div>
				  <div class="form-group"
>				    <div class="col-sm-offset-3 col-sm-9">
				    <!--
				      <button type="submit" class="btn btn-primary" onClick="validacion()" >GUARDAR</button>
				      -->
				      <button type="submit" class="btn btn-primary" onClick="valida_rut();" >GUARDAR</button>
				    </div>
				  </div>
				</form>
			</div>

			<div class="col-xs-1 col-sm-2 col-md-3">
			</div>

		</div>
	</div>

	<script src="validarRUT.js"></script>
	<script src="../js/funciones.js" ></script>
	
	<?php include 'sis_footer.php' ?>
	<?php include '../inc/footer_common.php'; ?>
</body>
</html>