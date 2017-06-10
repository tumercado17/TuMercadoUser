<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->
<head>
    <?php
        require_once("../logica/funciones.php");
        require_once("../logica/procesarFavoritos.php");
        sessionCheck();
     ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
   <title>Multipager Template- Travelic </title>
    <!--REQUIRED STYLE SHEETS-->
    <!-- BOOTSTRAP CORE STYLE CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLE CSS -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <!--ANIMATED FONTAWESOME STYLE CSS -->
    <link href="assets/css/font-awesome-animation.css" rel="stylesheet" />
     <!--PRETTYPHOTO MAIN STYLE -->
    <link href="assets/css/prettyPhoto.css" rel="stylesheet" />
       <!-- CUSTOM STYLE CSS -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <!-- php5 shim and Respond.js IE8 support of php5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/php5shiv/3.7.0/php5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]--></head>
<body>
     <!-- NAV SECTION -->
         <div class="navbar navbar-inverse navbar-fixed-top">

        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">TUMERCADO</a>
                <input class="navbar-brand" type="text" name="name1">
                <button class="btn btn-success">Buscar</button>
            </div>
            <div class="navbar-collapse collapse">
                 <ul class="nav navbar-nav navbar-right">
                     <li><a href="mainMenu.php">HOME</a></li>
                     <li><a href="Buscar.php">BUSCAR</a></li>
                     <li><a href="Vender.php">VENDER</a></li>
                     <?php
                       if($_SESSION['logged'] == false){
                         echo "
                           <li><a href='Login.php'>LOGIN</a></li>
                           <li><a href='Registrarse.php'>REGISTRARSE</a></li>
                           ";
                       }
                      ?>
                     <li><a href="Perfil.php">PERFIL</a></li>
                     <li><a href="Ayuda.php">AYUDA</a></li>
                     <li>
                       <?php
                        if($_SESSION['logged'] == true){
                          echo "
                            <form action='../logica/cerrarSes.php' method='POST'>
                              <input type='submit' class='btn btn-success' value='Cerrar sesión'></input>
                            </form>
                            ";
                        }
                        ?>
                     </li>
                </ul>
            </div>

        </div>
    </div>
     <!--END NAV SECTION -->

     <section  id="services-sec">
     </section>

     <section  id="services-sec">
       <div class="container"  >
           <div class="row text-center">
             <table class="table">
                <tr>
                  Favoritos:
                </tr>
               <?php

                  if(isset($_SESSION['favs'])){
                    if(!empty($_SESSION['favs'])){
                      	$array = $_SESSION['favs'];
                        $val = count($array[0]);
                        echo '<section  id="services-sec">';
                           echo '<div class="container"  >';
                              echo '<div class="row text-center">';
                                echo  '<table class="table">';
                                  echo '<tr>';
                                    echo '<td>Nombre</td>';
                                    echo '<td>Categoría</td>';
                                    echo '<td>Stock</td>';
                                    echo '<td>Fecha</td>';
                                    echo '<td>Precio</td>';
                                    echo '<td>Vendedor</td>';
                                  echo '</tr>';
                        for ($i = 0; $i < $val; $i ++){
                                    echo '<tr>';
                                      echo '<td>' . $array[0][$i]['nombre'] . '</td>';
                                      echo '<td>' . $array[0][$i]['categoria'] . '</td>';
                                      echo '<td>' . $array[0][$i]['stock'] . '</td>';
                                      echo '<td>' . $array[0][$i]['fecha'] . '</td>';
                                      echo '<td>' . $array[0][$i]['precio'] . '</td>';
                                      echo '<td>' . $array[1][0][$i] . '</td>';
                                    echo '</tr>';
                        }

                                  echo '</table>';
                                echo '</div>';
                            echo '</div>';
                          echo '</section>';
                       unset($_SESSION['favs']);
                    }
                  }
                  else{
                      obtenerFavoritos();
                  }

                ?>

               <tr>
                 <td>                 </td>
               </tr>
             </table>
           </div>
       </div>
     </section>



    <!--FOOTER SECTION -->
    <div id="footer">
      2017 www.tumercado.com | Todos los derechos reservados

    </div>
    <!-- END FOOTER SECTION -->

    <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY  -->
    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP CORE SCRIPT   -->
    <script src="assets/plugins/bootstrap.min.js"></script>
     <!-- ISOTOPE SCRIPT   -->
    <script src="assets/plugins/jquery.isotope.min.js"></script>
    <!-- PRETTY PHOTO SCRIPT   -->
    <script src="assets/plugins/jquery.prettyPhoto.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>

</body>
</html>
