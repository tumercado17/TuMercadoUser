<?php

require_once('../clases/persona.php');
require_once('../logica/funciones.php');
sessionCheck();

function obtenerFavoritos(){
  $conex = conectar();
  $ci=$_SESSION['ci'];
  $u= new Persona ($ci,'','','','','','','','','',''); //la cantidad de elementos de la clase
  $datos_u = $u->getFavs($conex);
    if(!empty($datos_u[0])){
    $_SESSION['favs']=$datos_u;
    header('Location:  ../presentacion/ListarFavoritos.php');
    die();

  }  else{
    ?>
    <script type="text/javascript">
    window.alert("no se encontraron favoritos.");
    location.href="../presentacion/Perfil.php";
    </script>
    <?php
  //  desconectar($conex);

  }


}


?>
