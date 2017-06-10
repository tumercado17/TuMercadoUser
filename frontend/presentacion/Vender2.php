<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->
<head>
  <?php   require_once("../logica/funciones.php");
          require_once("../clases/persona.php");
          sessionCheck();
          if($_SESSION['logged']  ==  false){
            Require_once("./login.php");
            ?>
            <script>  window.alert("Inicie sesión para ver esa página.");</script>
            <?php
            echo "<meta http-equiv=\"refresh\" content=\"0; url=../presentacion/login.php\" />";
          }
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

    <!--Package SECTION-->
    <section  id="services-sec">
        <div class="container">
          <form action="../logica/procesarPubl.php" method="POST">
              <div class="row">
                  <div class="col-md-6 ">
                      <div class="form-group">
                          <input id="titulo" name="titulo" nametype="text" class="form-control" required="required" placeholder="Titulo">
                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-md-6 ">
                    <div class="form-group">
                       <select id="estado" name="estado" class="form-control" required="required" placeholder="Estado">
                         <option value="nuevo">Nuevo</option>
                         <option value="usado">Usado</option>
                       </select>
                    </div>
                  </div>
              </div>

              <div class="row">
                  <div class="col-md-12 ">
                      <div class="form-group">
                          <input id="descripcion" name="descripcion" type="text" class="form-control" required="required" placeholder="Descripcion">                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-md-12 ">
                      <div class="form-group">
                          <input id="stock" name="stock" type="text" class="form-control" required="required" placeholder="Cantidad">                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-md-6 ">
                      <div class="form-group">
                          <input id="precio" name="precio" nametype="text" class="form-control" required="required" placeholder="Precio">
                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-md-6 ">
                    Categoría: <select id="categoria" name="categoria" class="form-control" required="required" placeholder="Categoría">
                      <option value="amobl">Amoblamientos</option>
                      <option value="veh">Vehículos</option>
                      <option value="tecn">Tecnología</option>
                      <option value="indu">Indumentria</option>
                      <option value="electrodom">Electrodomésticos</option>
                      <option value="servicios">Servicios</option>
                    </select>
                  </div>
                  <div class="form-group">
                      <button type="submit" class="btn btn-success">Ingresar</button>
                  </div>
              </div>
          </form>
        </div>
    </section>
    <!--END Package SECTION-->





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
