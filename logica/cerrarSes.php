<?php


    Require_once("./funciones.php");
    sessionCheck();
    session_unset();
    //CAMBIAR POR COMANDO QUE BORRE LAS VARIABLES DE ENTORNO.
?>
    <script type="text/javascript">
    window.alert("Sesión cerrada correctamente.");
    location.href="../presentacion/index.php";
    </script>
