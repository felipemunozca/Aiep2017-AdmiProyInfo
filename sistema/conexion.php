
<?php
	/*** CONEXION MAS SIMPLE ***/
	/*** PRIMERO, RESCATAR LOS DATOS DE CONEXION HACIA EL SERVIDOR Y LA BASE DE DATOS ***/
	$conexion = new mysqli("localhost","root","","db_proyecto_aiep"); 
	if (mysqli_connect_errno()) {
		echo "Error al conectarse a la base de datos: " , mysqli_connect_error();
		exit();
	}
?>


<?php
	/*** CONEXION MAS COMPLEJA ***/
	#$mysqli=new mysqli("localhost","root","","db_proyecto_aiep"); 
	                  //servidor, usuario de base de datos, contraseña del usuario, nombre de base de datos
	
	#if(mysqli_connect_errno()){
	#	echo 'Error al conectarse a la base de datos : ', mysqli_connect_error();
	#	exit();
	#}
	
?>