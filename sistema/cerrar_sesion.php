<?php 

	session_start();
/*** DESTRUIR LA SESION INICIADA ***/
	session_destroy();

	header("Location: inicio_sesion.php");

 ?>