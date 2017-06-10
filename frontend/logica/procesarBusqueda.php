<?php

require_once('../clases/publicacion.php');
require_once('../logica/funciones.php');
sessionCheck();

$busq= strip_tags($_GET['busqueda']);
$cat = strip_tags($_GET['categoria']);
$nuevUsu = strip_tags($_GET['nuevUsu']);
$orden = strip_tags($_GET['orden']);

$conex = conectar();
$u= new Publicacion ('','','',$cat,'','',$busq,$nuevUsu,$orden); //la cantidad de elementos de la clase

$datos_u=$u->buscarPubl($conex);
  if(!empty($datos_u)){
    $_SESSION['arrBusq']=$datos_u;
    header('Location: ../presentacion/Buscar.php');

}  else{
  ?>
  <script type="text/javascript">
  window.alert("No se encontró ningún resultado o \n hubo un problema al intentar \n realizar su búsqueda .");
  location.href="../presentacion/Buscar.php";
  </script>
  <?php
//  desconectar($conex);

}




 ?>
