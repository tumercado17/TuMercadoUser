<?php

require_once('../clases/persona.php');
require_once('../logica/funciones.php');
sessionCheck();

function obtenerListaVentas(){
  $conex = conectar();
  $ci=$_SESSION['ci'];
  $u= new Persona ($ci,'','','','','','','','','',''); //la cantidad de elementos de la clase
  $datos_u = $u->getVenta($conex);

    if(!empty($datos_u[0])){
    $_SESSION['vent']=$datos_u;
    header('Location:  ../presentacion/ListarVentas.php');
    die();

  }  else{
    ?>
    <script type="text/javascript">
    window.alert("usted no ha hecho ninguna venta.");
    location.href="../presentacion/Perfil.php";
    </script>
    <?php
  //  desconectar($conex);

  }


}


?>
