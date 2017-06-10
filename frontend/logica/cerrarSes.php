<?php


    Require_once("./funciones.php");
    sessionCheck();
    $path = $_SERVER['SERVER_ADDR'];
    $host= gethostname();
    $ip = gethostbyname($host);
    session_unset();
    session_destroy();
    header('Location:  ../index.php');
    die();

    //CAMBIAR POR COMANDO QUE BORRE LAS VARIABLES DE ENTORNO.
?>
    <script type="text/javascript">
    window.alert("Sesión cerrada correctamente.");
    location.href="../presentacion/mainMenu.php";
    </script>
