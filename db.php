<?php

//base de datos 
    $Cedula = $_POST['Celuda'];
    $Nombre = $_POST['Nombre'];
    $Contacto = $_POST['Contacto'];
    $Direccion = $_POST['Direccion'];
    $Email = $_POST['Email'];
    $Contraseña = $_POST['Contraseña'];

    require('dbconexion.php');

    $conexion=mysqli_connect($db_host, $db_usuario,$db_password,$db_nombre);

    //  if (mysqli_connect_errno()){
    //      echo "<br>";
    //      echo "no se hizo la conexión";
    //      exit

    // }


    mysqli_set_charset($conexion, "utf8");

    $consulta="INSERT INTO propietario(cedula_ptr , nombre_ptr , contacto_ptr, direccion_ptr , email_ptr , contraseña_ptr) VALUES ('$Cedula', '$Nombre', '$Contacto', '$Direccion', '$Email', '$Contraseña')";
    $resultado=mysqli_query($conexion, $consulta);

    if($resultado==false){
        echo "<center>";
        echo "Error al insertar datos";
        echo "</center>";
    }else{
        echo "<center>";
        echo "Registro correctamente";
        echo "</center>";
    }
    
    //Inicio de sesion
    $gmail = $_POST['gmail'];

    if($gmail=="stiven03dg@gmail.com"){
        echo "<!DOCTYPE html>
        <html class="no-js" lang="en">
        <head>
        <meta charset="utf-8">
        <title>TruckService</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="author" content="weibergmedia">
        <meta name="Description" content="Belton – Sophisticated Responsive HTML5 Photography Portfolio">
        <link href="css/reset.css" rel="stylesheet" type="text/css" media="screen" />
        <link href="css/bootstrap.min.css" rel="stylesheet" />
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/contact.css" rel="stylesheet" type="text/css" media="screen" />
        <link href="css/styles.css" rel="stylesheet" type="text/css" media="screen" />
        <link href="css/jquery.fancybox.css" rel="stylesheet" type="text/css" media="screen" />
        <link href="css/responsive.css" rel="stylesheet" type="text/css" media="screen" />
        <link href="css/flexslider.css" rel="stylesheet" type="text/css" media="screen">
        <link href="https:/fonts.googleapis.com/css?family=Amiri:400,600" rel="stylesheet" />
        <link href="https:/fonts.googleapis.com/css?family=Oswald:400,600,700" rel="stylesheet" />
        <link href="https:/fonts.googleapis.com/css?family=Lato:400,600" rel="stylesheet" />
        <script src="js/modernizr.js" type="text/javascript"></script>
        </head>
        <body class="amiri">
        <div id="nav-wrapper"> 
          <!-- start main nav -->
          <nav id="main-nav">
            <ul class="clearfix">
              <li> <a href="hol.html" class="sub-nav-toggle selected">Inicio</a>
              <li> <a href="perfil.htm">Perfil</a></li>
              <li> <a href="conductor.htm">Conductor</a> </li>
              <li> <a href="blog.html">Vehículo</a> </li>
              <li> <a href="empresas.htm" class="sub-nav-toggle">Empresa</a>
              </li>
              <li> <a href="contacto.htm">Contacto</a> </li>
            </ul>
          </nav>
          <!-- end main nav --> 
        </div>
        <div id="content-overlay"></div>
        <div id="wrap">
          <div id="menu-button">
            <div class="centralizer">
              <div class="cursor">
                <div id="nav-button"> <span class="nav-bar"></span> <span class="nav-bar"></span> <span class="nav-bar"></span> </div>
              </div>
            </div>
          </div>
          
          <!-- start header -->
          <header id="header" class="clearfix">
            <h1 id="titulo">Truckservice</h1>
          </header>
          <!-- end header --> 
          
          <!-- start content -->
          <div id="content">
            <div class="full-width intro">
              <div class="full-height not-completely-full">
                <div class="fixed">
                  <figure class="background-image3 parallax parallax-banner"></figure>
                </div>
                <div class="full-height-wrapper white-text">
                  <div class="parent">
                    <div class="bottom">
                      <div class="container">
                        <div class="animatedblock delay2 animatedUp">
                          <div class="col-lg-6 col-md-offset-1 col-md-7">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <section class="white">
              <div class="container clearfix">
                <div class="col-md-3 col-md-offset-1">
                  <div class="break"></div>
                </div>
                <div class="col-md-7 col-sm-6">
                  <p class="large">Nuestro aplicativo web</p>
                </div>
              </div>
            </section>
          <!-- end content -->
          
          <footer id="footer">
            <div class="container clearfix">
              <p class="alignleft"> &copy; 2022</p>
              <p class="alignright"> by <a href="http:/www.weibergmedia.com" data-title="Premium HTML5 Website Templates">TruckServices</a>.</p>
            </div>
          </footer>
        </div>
        <!-- end wrap --> 
        
        <script src="js/jquery-1.12.4.min.js" type="text/javascript"></script> 
        <script src="js/jquery-easing-1.3.js" type="text/javascript"></script> 
        <script src="js/jquery.touchSwipe.min.js" type="text/javascript"></script> 
        <script src="js/jquery.isotope2.min.js" type="text/javascript"></script> 
        <script src="js/jquery.ba-bbq.min.js" type="text/javascript"></script> 
        <script src="js/packery-mode.pkgd.min.js" type="text/javascript"></script> 
        <script src="js/jquery.isotope.load.js" type="text/javascript"></script> 
        <script src="js/main.js" type="text/javascript"></script> 
        <script src="js/jquery.form.js" type="text/javascript"></script> 
        <script src="js/input.fields.js" type="text/javascript"></script> 
        <script src="js/preloader.js" type="text/javascript"></script> 
        <script src="js/bootstrap.min.js" type="text/javascript"></script> 
        <script src="js/jquery.fancybox.pack.js" type="text/javascript"></script> 
        <script src="js/jquery.flexslider-min.js" type="text/javascript"></script>
        </body>
        </html>"
    }

?>