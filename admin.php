<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
<meta charset="utf-8">
<title>TruckService</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="author" content="weibergmedia">
<meta name="Description" content="Belton – Sophisticated Responsive HTML5 Photography Portfolio">
<link href="css/reset.css" rel="stylesheet" type="text/css" media="screen" />
<!-- <link href="css/bootstrap.min.css" rel="stylesheet" /> -->
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link href="css/contact.css" rel="stylesheet" type="text/css" media="screen" />
<link href="css/turnos.css" rel="stylesheet" type="text/css" media="screen" />
<link href="css/jquery.fancybox.css" rel="stylesheet" type="text/css" media="screen" />
<link href="css/responsive.css" rel="stylesheet" type="text/css" media="screen" />
<link href="css/flexslider.css" rel="stylesheet" type="text/css" media="screen">
<link href="https://fonts.googleapis.com/css?family=Oswald:400,600,700" rel="stylesheet" />
<link href="css/footer.css" rel="stylesheet" type="text/css" media="screen" />

<!-- scripts -->
<script src="js/progressbar.js"></script>
<script src="js/modernizr.js" type="text/javascript"></script>
</head>
<body class="amiri">
<div id="nav-wrapper"> 
  <!-- start main nav -->
  <nav id="main-nav">
    <ul class="clearfix">
      <li> <a href="index.htm">Inicio</a>
      <li> <a href="empresas.htm">Empresas</a>
        <li> <a href="admin.htm"  class="sub-nav-toggle selected">Configuración de turnos</a>
      </li>
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

  <!-- end header --> 
  
  <!-- start content -->
  <!-- <div id="content">
    <div class="full-width intro">
      <div class="full-height not-completely-full">
        <div class="fixed">
          <figure class="background-image3 parallax parallax-banner"></figure>
        </div>
        <div class="full-height-wrapper white-text">
          <div class=" ">
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
    </div> -->
   
    <section class="white">
    <header id="cabecera">


<a href="index.htm" class="sub-nav-toggle selected">Inicio</a>
<a href="perfil.htm">Perfil</a>
<a href="index.htm">   <img src="images/logoblanconuevo.png" alt="logodetruckservice" width="85px" height="85px"></a>
<a href="empresas.htm">Central Mayorista</a>
<a href="#contactanos">Contáctanos</a>


</header>
      <div class="parent">
        <div class="div1">  <div class="cuadricula">
          <h2>Turno 1</h2>
          <style>

            #Progress_Status {
            /* width: 90%; */
            background-color: #ddd;
            /* border-radius: 40px; */
           display: flex;
           text-align: center;
           }
            
            #myprogressBar {
              display: flex;
            width: 0%;
            height: 35px;
            background-color: #a05bf5;
            text-align: center;
            line-height: 50px;
            color: #fff;
            /* border-radius: 30px; */
            justify-content: center;
            align-content: center;
            }
            
            
            </style>
            
            <p>Información del turno</p>
           
            <div class="block">
              <input type="text" name="" id="" value="Nombre">
              <input type="text" name="" id="" value="Placa">
            </div>
            <br>
            <br>


            <button onclick="update()" class="start" id="inicio">Start </button>
            
            

  </div> </div>
        <div class="div2">   <div class="cuadricula">
          <h2>Turno 2</h2>
          <style>

            #Progress_Status {
            /* width: 90%; */
            background-color: #ddd;
            border-radius: 40px;
           display: flex;
           text-align: center;
           }
            
            #myprogressBar {
              display: flex;
            width: 1%;
            height: 35px;
            background-color: #a05bf5;
            text-align: center;
            line-height: 50px;
            color: #fff;
            border-radius: 30px;
            justify-content: center;
            align-content: center;
            }
            
            
            </style>
            
            <p>Información del turno</p>
            <div class="block">
              <input type="text" name="" id="" value="Nombre">
              <input type="text" name="" id="" value="Placa">
            </div>
         <br>
            <br>
            <button onclick="update()" class="start">Start </button>
            
            

  </div></div>
        <div class="div3">   <div class="cuadricula">
          <h2>Turno 3</h2>
          <style>

            #Progress_Status {
            /* width: 90%; */
            background-color: #ddd;
            border-radius: 40px;
           display: flex;
           text-align: center;
           }
            
            #myprogressBar {
              display: flex;
            width: 1%;
            height: 35px;
            background-color: #a05bf5;
            text-align: center;
            line-height: 50px;
            color: #fff;
            border-radius: 30px;
            justify-content: center;
            align-content: center;
            }
            
            
            </style>
            
            <p>Información del turno</p>
            <div class="block">
              <input type="text" name="" id="" value="Nombre">
              <input type="text" name="" id="" value="Placa">
            </div>
         <br>

            <br>
            <button onclick="update()" class="start">Start </button>
            
            

  </div></div>
        <div class="div4">  <div class="cuadricula">
          <h2>Turno 4</h2>
          <style>

            #Progress_Status {
            /* width: 90%; */
            background-color: #ddd;
            border-radius: 40px;
           display: flex;
           text-align: center;
           }
            
            #myprogressBar {
              display: flex;
            width: 1%;
            height: 35px;
            background-color: #a05bf5;
            text-align: center;
            line-height: 50px;
            color: #fff;
            border-radius: 30px;
            justify-content: center;
            align-content: center;
            }
            
            
            </style>
            
            <p>Proceso de descargue y cargue</p>
           
            <div class="block">
              <input type="text" name="" id="" value="Nombre">
              <input type="text" name="" id="" value="Placa">
            </div>
         <br>
            <br>
            <button onclick="update()" class="start">Start </button>
            
            

  </div> </div>
      </div> 
    </section>
  <!-- end content -->
  
  <footer id="footer">
    <div class="container clearfix">
      <div class="contac">
        <div class="divuno">
          <p class="alignleft"> &copy; 2022</p>
        </div>
        <div class="divdos">
          <div class="sections">
            <section class="contact-info">
                <h3>Cont&aacute;ctanos</h3>
                <form
                    action=""
                  method="POST" id="mG61Hd">
                    <div class="form-field">
                        <label for="name">Nombre: <span class="required-field-label">*</span></label>
                        <input type="text" class="form-text" placeholder="Escribe tu nombre" autocomplete="off"
                            id="name" name="entry.1221196738" value="" required>
                    </div>
                    <div class="form-field">
                        <label for="email">Correo: <span class="required-field-label">*</span></label>
                        <input type="email" class="form-text" placeholder="Escribe tu correo eletr&oacute;nico"
                            autocomplete="off" id="email" name="entry.809673193" value="" required>
                    </div>
                    <div class="form-field">
                        <label for="phone">Tel&eacute;fono:</label>
                        <input type="text" class="form-text" placeholder="Escribe tu n&uacute;mero de tel&eacute;fono"
                            autocomplete="off" id="phone" name="entry.1635170270" value="">
                    </div>
                    <div class="form-field">
                        <label for="message">Mensaje:</label>
                        <textarea data-rows="1" id="message" name="entry.196369173"
                            placeholder="Escribe tu mensaje"></textarea>
                    </div>
                    <button type="submit">Enviar</button>
                </form>
            </section>
            
        </div>
        </div>
        <div class="divtres"> <p class="alignright"> by <a href="index.htm">TruckServices</a></p> 
        </div>

    </div>
    </div>
  </footer>

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
<script src="js/progressbar.js" type="text/javascript"></script>
<script>
                
  function update() {
  var element = document.getElementById("myprogressBar");
  var width = 1;
  var identity = setInterval(scene, 600);
  function scene() {
    if (width >= 100) {
    clearInterval(identity);
    } else {
    width++;
    element.style.width = width + '%';
    element.innerHTML = width * 1 + '%';
    }
  }
  }
  
  </script>
</body>
</html>