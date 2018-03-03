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

<!DOCTYPE html>
<html lang="es">
<head>
	<title>NUEVO INCIDENTE</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php include '../inc/head_common.php'; ?>
	<link rel="stylesheet" href="../css/sistema.css">
</head>
<body id="fondo-oscuro">
<br>
	<section>
			<div class="container">
				<div class="row">
					<div class="col-xs-1 col-sm-2 col-md-3">
					</div>

					<div class="col-xs-10 col-sm-8 col-md-6" id="cuadro-blanco">
<!-- Metodo para enviar los datos del formulario a la consulta sql -->
						<form class="form-horizontal" action="create_incidente.php" method="POST" enctype="multipart/form-data" name="formulario">
						  <div class="form-group">
						    <label class="col-sm-3 control-label">R.U.N.:</label>
						    <div class="col-sm-9">
						      <input type="text" class="form-control" name="rut" placeholder="Ej: 12.345.678-9" 
							  value="<?php echo $_SESSION['usu_rut'];?>" readonly="readonly" >
						      </div>
						  </div>
						  <div class="form-group">
						    <label class="col-sm-3 control-label">Nombre:</label>
						    <div class="col-sm-9">
						      <input type="text" class="form-control" name="nomb2" placeholder="Ej: Cristobal"
						      value="<?php echo $_SESSION['usu_nombre']." ".$_SESSION['usu_apellido'];?>" readonly="readonly" > 
						    </div>
						  </div>
						  <div class="form-group">
						  	<label class="col-sm-3 control-label">Incidente:</label>
						  	<div class="col-sm-9">
						  		<textarea type="text" name="inci2" class="form-control" placeholder="Ingrese aqui el incidente que quiere informar..." rows="4" required="required"></textarea>
						  	</div>
						  </div>
						  <!--
						  <div class="form-group">
						    <label class="col-sm-2 control-label">Fecha:</label>
						    <div class="col-sm-10">
						      <input type="text" class="form-control" name="fech2" placeholder="Ej: Muñoz" required="required" 
						      onkeypress="" >
						    </div>
						  </div>
						  <div class="form-group">
						    <label class="col-sm-2 control-label">Hora:</label>
						    <div class="col-sm-10">
						      <input type="text" class="form-control" name="hora2" placeholder="Ej: 987654321" required="required" 
						       onkeypress="">
						    </div>
						  </div>
						  -->
						  <div class="form-group">
						    <label class="col-sm-3 control-label">Imagen:</label>
						    <div class="col-sm-9">
						    	<input type="file" name="Imagen" required="required">
						    <!--
						      <input type="file" class="form-control" name="tele2" placeholder="Ej: 987654321" required="required" 
						       onkeypress="soloNumeros();">
						    -->
						    </div>
						  </div>
						  <div class="form-group"
		>				    <div class="col-sm-offset-3 col-sm-9">
						    <!--
						      <button type="submit" class="btn btn-primary" onClick="validacion()" >GUARDAR</button>
						      -->
						      <button type="submit" class="btn btn-primary">GUARDAR</button>

						    </div>
						  </div>
						</form>
					</div>

					<div class="col-xs-1 col-sm-2 col-md-3">
					</div>
				
				</div>
			</div>
	</section>

	<?php include ('sis_footer.php') ?>
	<?php include '../inc/footer_common.php'; ?>
</body>
</html>