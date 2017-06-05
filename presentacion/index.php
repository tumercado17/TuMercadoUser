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
                    <li><a href="index.php">HOME</a></li>
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

    <!--HOME SECTION-->
    <div id="home-sec">


    <div class="container"  >
        <div class="row text-center">
            <div  class="col-md-12" >
                <span class="head-main" >Ofertas para Premiums!</span>
                <h3 class="head-last col-md-4 col-md-offset-4  col-sm-6 col-sm-offset-3">Viaje a piriapolis</h3>


            </div>
        </div>
    </div>
         </div>


    <section  id="services-sec">
        <div class="container">
            <div class="row ">
                <div class="text-center g-pad-bottom">
                    <div class="col-md-4 col-sm-4 alert-info">
                            <h4>Ofertas </h4>
                            <p>
                                Tenemos grandes ofertas para usted el dia de hoy,
                         desde electrodomesticos hasta viajes al extranjero.
                                Entre aqui para ser el primero en descubrirlo, pasela bien
                            </p>

                    </div>
                    <div class="col-md-4 col-sm-4 alert-success">
                            <h4>Conosca proveedores</h4>
                            <p>
                                Nuestro trabajo es todo gracias al esfuerzo de las personas para las que trabajamos,
                         Cualquier pregunta que quiera hacerles a ellos a travez de nosotros seran escuchadas.
                                 No tenga miedo e informese.
                            </p>

                    </div>

                    <div class="col-md-4 col-sm-4 alert-danger">
                            <h4>Trabaja con nosotros</h4>
                            <p>
                                ¿Estas interesado en la venta y distribucion?.
                         No descartes la idea de unirte a nosotros, estamos felices de darte la oportunidad.
                                Si asi es, esperamos verte pronto.
                            </p>

                    </div>
                </div>
                  </div>
                <div class="row go-marg">

                    <div class="col-md-4 col-sm-4">
                          <div class="panel panel-default">

                        <div class="panel-body">
                             <h4 class="adjst">Licuadora james</h4>
                            <p>
                                   <img src='licuadora.jpg'>

                                </p>


                        </div>
                    </div>

                    </div>
                   <div class="col-md-4 col-sm-4">
                          <div class="panel panel-default">

                        <div class="panel-body">
                             <h4 class="adjst">Auto con ruedas </h4>
                            <p>
                                    <img src='auto.png'>

                                </p>


                        </div>
                    </div>

                    </div>
                     <div class="col-md-4 col-sm-4">
                          <div class="panel panel-default">

                        <div class="panel-body">
                             <h4 class="adjst">Laptop de colores</h4>
                            <p>
                                   <img src='laptop.jpg'>
                                </p>


                        </div>
                    </div>

                    </div>
                </div>
                <div class="row go-marg">

                      <div class="col-md-4 col-sm-4">
                            <div class="panel panel-default">

                          <div class="panel-body">
                               <h4 class="adjst">Oferta #1 </h4>
                              <p>
                                     Bla bla bla bla bla bla bla bla bla bla bla
                             bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla
                             bla bla bla bla bla
                                  </p>

                               <span class="label label-danger">Cost: 100 $</span>
                          </div>
                      </div>

                      </div>
                     <div class="col-md-4 col-sm-4">
                            <div class="panel panel-default">

                          <div class="panel-body">
                               <h4 class="adjst">Oferta #2 </h4>
                              <p>
                                     Bla bla bla bla bla bla bla bla bla bla bla
                             bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla
                             bla bla bla bla bla
                                  </p>
                                <span class="label label-danger">Cost: 500 $</span>

                          </div>
                      </div>

                      </div>
                       <div class="col-md-4 col-sm-4">
                            <div class="panel panel-default">

                          <div class="panel-body">
                               <h4 class="adjst">Oferta #3 </h4>
                              <p>
                                     Bla bla bla bla bla bla bla bla bla bla bla
                             bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla
                             bla bla bla bla bla
                                  </p>

                               <span class="label label-danger">Cost: 300 $</span>
                          </div>
                      </div>

                      </div>
                  </div>
            <div class="row go-marg">

                      <div class="col-md-4 col-sm-4">
                            <div class="panel panel-default">

                          <div class="panel-body">
                               <h4 class="adjst">Oferta #4 </h4>
                              <p>
                                     Bla bla bla bla bla bla bla bla bla bla bla
                             bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla
                             bla bla bla bla bla
                                  </p>

                               <span class="label label-danger">Cost: 200 $</span>
                          </div>
                      </div>

                      </div>
                     <div class="col-md-4 col-sm-4">
                            <div class="panel panel-default">

                          <div class="panel-body">
                               <h4 class="adjst">Oferta #5 </h4>
                              <p>
                                     Bla bla bla bla bla bla bla bla bla bla bla
                             bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla
                             bla bla bla bla bla
                                  </p>

                               <span class="label label-danger">Cost: 300 $</span>
                          </div>
                      </div>

                      </div>
                       <div class="col-md-4 col-sm-4">
                            <div class="panel panel-default">

                          <div class="panel-body">
                               <h4 class="adjst">Oferta #6 </h4>
                              <p>
                                     Bla bla bla bla bla bla bla bla bla bla bla
                             bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla
                             bla bla bla bla bla

                                  </p>

                               <span class="label label-danger">Cost: 400 $</span>
                          </div>
                      </div>

                      </div>
                  </div>
        </div>
    </section>
    <!--END HOME SECTION-->





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
