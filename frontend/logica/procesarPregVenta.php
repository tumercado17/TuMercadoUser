<?php

require_once('../clases/persona.php');
require_once('../logica/funciones.php');
sessionCheck();

function obtenerPregVentas(){
  $conex = conectar();
  $ci=$_SESSION['ci'];
  $u= new Persona ($ci,'','','','','','','','','',''); //la cantidad de elementos de la clase
  $datos_u = $u->getPregVenta($conex);
    if(!empty($datos_u[0])){
    $_SESSION['pregVentas']=$datos_u;
    header('Location:  ../presentacion/pregVentas.php');
    die();

  }  else{
    ?>
    <script type="text/javascript">
    window.alert("no hay preguntas para mostrar.");
    location.href="../presentacion/perfil.php";
    </script>
    <?php
  }
}
