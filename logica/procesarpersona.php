<?php

	session_start();
	require_once('funciones.php');
	require_once('../clases/persona.php');

	$conex = conectar();
  //$a = strip_tags($_POST['ci']);
	$nom = strip_tags($_POST['nombre']);
  //$c = strip_tags($_POST['apellido']);
  /*$d = strip_tags($_POST['email']);
  $e = strip_tags($_POST['pais']);
  $f = strip_tags($_POST['tarjeta']);
  $g = strip_tags($_POST['calificacion']);
  $h = strip_tags($_POST['calle']);
  $i = strip_tags($_POST['numero']);
  $j = strip_tags($_POST['telefono']);
  */
  $cont = strip_tags($_POST['contrasena']);

	$ejecucionOK=true;

	$u = new persona ($nom,$cont);
	$ejecucionOK=$u->alta($conex);

	if($ejecucionOK){
		echo "los datos se ingresaron ok";
		header('Location: http://localhost/ignacioclase(modificado)/presentacion/index.html');
	}else{
		echo "los datos no se ingresaron";
	}
?>
