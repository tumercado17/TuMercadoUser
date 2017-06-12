<?php

function conectar(){
    try {
        $conexion = new PDO('mysql:host=localhost;dbname=base.sitio', 'root', '');
        $conexion->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, true);
        return($conexion);
    } catch (PDOException $e) {

        print "<p>Error: No puede conectarse con la base de datos.</p>\n";

        exit();
    }
}

function desconectar($conexion)
{
   $conexion=null;

}


  function sessionStart(){
    session_start();
    $_SESSION['state'] = 'std';
    $_SESSION['logged'] = false;
    $_SESSION['path'] = getcwd();

  }


  function sessionCheck(){

  		 if(!isset($_SESSION)){
            session_start();
          if(isset($_SESSION['state']) and !empty($_SESSION['state'])){										//SE REVISA QUE LA VARIABLE DE ESTADO DE LA SESION ESTÉ SETEADA

      		 }
      		 else{
        			$_SESSION['state'] = 'cld';
        			$_SESSION['logged'] = false;

        			if (file_exists("./mainMenu.php")){
        				Require_once("./mainMenu.php");
                ?>
                <script> window.alert("Sesión expirada, inicie sesión nuevamente."); </script>
                <?php
                echo "<meta http-equiv=\"refresh\" content=\"0; url=../presentacion/mainMenu.php\" />";//REDIRIGE AL USUARIO AL INICIO
        			}
        			elseif(file_exists("../presentacion/mainMenu.php")){
        				Require_once("../presentacion/mainMenu.php");
                ?>
                <script> window.alert("Sesión expirada, inicie sesión nuevamente."); </script>
                <?php
                echo "<meta http-equiv=\"refresh\" content=\"0; url=../presentacion/mainMenu.php\" />";//REDIRIGE AL USUARIO AL INICIO
        			}
      		 }
        }
  }

  function sessionClose(){
		session_unset();
		session_destroy();
	}



?>
