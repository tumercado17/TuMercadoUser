<?php

require_once('../clases/persona.php');
require_once('../logica/funciones.php');
sessionCheck();


$nom= strip_tags(trim($_POST['nombre']));
//trim elimina los espacion en blanco
$pass = strip_tags(trim($_POST['contrasena']));

$conex = conectar();
$u= new Persona ('',$nom,'','','','','','','','',$pass); //la cantidad de elementos de la clase

$datos_u=$u->loginusu($conex);
  if(!empty($datos_u)){
    $_SESSION['logged'] = true;
    ?>
    <script type="text/javascript">
    var j = "<?php echo $nom; ?>";
    window.alert("Bienvenido " + j);
    location.href="../presentacion/index.php";
    </script>


    <?php

}  else{
  ?>
  <script type="text/javascript">
  window.alert("El Usuario o Password \n no es correcto.");
  location.href="../presentacion/login.php";
  </script>
  <?php
//  desconectar($conex);

}

?>
