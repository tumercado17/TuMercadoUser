<?php

require_once('../clases/persona.php');
require_once('../logica/funciones.php');
sessionCheck();


$nom= strip_tags(($_POST['nombre']));
$apell = strip_tags(($_POST['apellido']));
$ci = strip_tags(($_POST['cedula']));
$email = strip_tags(($_POST['email']));
$pais = strip_tags(($_POST['pais']));
$pass = strip_tags(($_POST['contrasena']));
$calle = strip_tags(($_POST['calle']));
$num = strip_tags(($_POST['numero']));
//$tarj = strip_tags(($_POST['tarjeta']));
//$cali = strip_tags(($_POST['calificacion']));




$conex = conectar();
$u= new persona ($ci,$nom,$apell,$email,$pais,'','',$calle,$num,'',$pass); //la cantidad de elementos de la clase


$datos_u=$u->registroUsu($conex);

  if($datos_u[0] == true ){
    ?>
    <script type="text/javascript">
    window.alert("se registro correctamente ");
    location.href="../presentacion/mainMenu.php";
    </script>

    <?php

}  elseif($datos_u[0] == false and $datos_u[1] == 0 ){
  ?>
  <script type="text/javascript">
  window.alert("No se pudo registrar.");
  location.href="../presentacion/Registrarse.php";
  </script>
  <?php
//  desconectar($conex);

}    elseif($datos_u[0] == false and $datos_u[1] == 1 ){
  ?>
  <script type="text/javascript">
  window.alert("Usuario ya existe.");
  location.href="../presentacion/Registrarse.php";
  </script>
  <?php

}

?>
