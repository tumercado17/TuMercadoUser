<?php

require_once('../clases/publicacion.php');
require_once('../logica/funciones.php');

//Sanit
$nom= strip_tags($_POST['titulo']);
$desc= strip_tags($_POST['descripcion']);
$tipo= strip_tags($_POST['estado']);
$precio= strip_tags($_POST['precio']);
$cat= strip_tags($_POST['categoria']);
$stock= strip_tags($_POST['stock']);

$conex = conectar();
$u= new Publicacion ('',$precio,$desc,$cat,$stock,'',$nom,$tipo); //la cantidad de elementos de la clase

$datos_u=$u->crea($conex);
  print_r($datos_u);
  if(!empty($datos_u)){
    ?>
    <script type="text/javascript">
    window.alert("Alta correcta");
      location.href="../presentacion/Vender2.php";
    </script>
    <?php
}  else{
  ?>
  <script type="text/javascript">
  window.alert("El Usuario o Password \n no es correcto.");
      location.href="../presentacion/Vender2.php";
  </script>
  <?php
//  desconectar($conex);

}

?>
