<?php

require_once('../clases/persona.php');
require_once('../logica/funciones.php');
sessionCheck();

function obtenerListaCompras(){
  $conex = conectar();
  $ci=$_SESSION['ci'];
  $u= new Persona ($ci,'','','','','','','','','',''); //la cantidad de elementos de la clase
  $datos_u = $u->getCompr($conex);

    if(!empty($datos_u[0])){
    $_SESSION['compr']=$datos_u;
    header('Location:  ../presentacion/ListarCompras.php');
    die();

  }  else{
    ?>
    <script type="text/javascript">
    window.alert("usted no ha hecho ninguna compra.");
    location.href="../presentacion/Perfil.php";
    </script>
    <?php
  //  desconectar($conex);

  }


}


?>
