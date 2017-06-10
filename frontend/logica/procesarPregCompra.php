<?php

require_once('../clases/persona.php');
require_once('../logica/funciones.php');
sessionCheck();

function obtenerPregCompras(){
  $conex = conectar();
  $ci=$_SESSION['ci'];
  $u= new Persona ($ci,'','','','','','','','','',''); //la cantidad de elementos de la clase
  $datos_u = $u->getPregCompr($conex);
    if(!empty($datos_u[0])){
    $_SESSION['pregCompr']=$datos_u;
    header('Location:  ../presentacion/pregCompras.php');
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
