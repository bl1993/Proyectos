<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Hotel Rural Sierra de Gata</title>
         <?php require_once "./login/scripts.php"; ?>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
          <link rel='stylesheet' id='all-css-2-1' href='https://s0.wp.com/wp-content/mu-plugins/comment-likes/css/comment-likes.css?m=1407378799h&cssminify=yes' type='text/css' media='all' />
         <link rel='stylesheet' id='print-css-3-1' href='https://s0.wp.com/wp-content/themes/pub/varia/print.css?m=1571655471h&cssminify=yes' type='text/css' media='print' />
         <link rel='stylesheet' id='all-css-4-1' href='https://s0.wp.com/_static/??-eJx9jUsOwjAMRC+EsVoqWCHOkqZuGkjiKHEacXtasSkfdeeR35vBGkFzEAqCMpGnjLH0ONFMCbM8HR11zgf8j80qWYU26DcKNWr2P4IvEF0xNmSsdjAkGaksX35YAqcqCvnolCyl/xc3BYYYHGsllsNHgNEpm/bUwOuCGrwN0KsEc7tHJ+odm+U0uFCbuCcJZ0gUOQmMnPx3XtWbvzbnpmu7S3tq7i9qro7m?cssminify=yes' type='text/css' media='all' />
         <link crossorigin="anonymous" rel='stylesheet' id='hever-fonts-css'  href='https://fonts.googleapis.com/css?family=PT+Sans%3A400%2C400i%2C700%2C700i&#038;subset=latin%2Clatin-ext&#038;display=swap' media='all' />
         <link rel='stylesheet' id='all-css-6-1' href='https://s0.wp.com/_static/??/wp-content/themes/pub/hever/style.css,/wp-content/mu-plugins/admin-bar/masterbar-overrides/masterbar.css?m=1614247231j&cssminify=yes' type='text/css' media='all' />
         <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
         <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
         <script src="https://code.jquery.com/jquery-3.5.0.js"></script><!-- JQUERY -->
         <script type="text/javascript" src="jquery-3.3.1.js"></script>
        
         <link rel="stylesheet" href="styles.css">
         <script src="js/alertifyjs/alertify.js"></script>
        
        
    </head>
    
    <body style="background-color:#EDEDED;font-family: Arial, Helvetica, sans-serif;">
     <!--WHITE NAV -->
     
        <div style="height:25px;background-color:white;">
     <!-- RRSS -->
           <div style="float:left;">
                <a href="#" class="fa fa-facebook"></a>
                <a href="#" class="fa fa-twitter"></a>
                <a href="#" class="fa fa-instagram"></a>
            </div>
     <!-- LOGIN BUTTON -->
            <div style="float:right;">
                <div class="container">
                    <img class="login_icon" src="./images/inicio_sesion2.svg">
                    <div class="overlay">
                       <div class="text"><a class="login_link" href="login/acceso.php#acceso_usuarios">Iniciar Sesión</a></div>
                    </div> 
               </div> 
            </div>
        </div>
        <!-- TITTLE DIV -->
         <div style="height:70px;background-color:#1F2E34;" >
             <div style="height:100%;width: 100%;float:left;align-content:center;"> <!--FLOAT RIGHT = INDEX.2PHP-->
                 <img src="./images/captura de pantalla(2).png" style="height:90%;width:15%;margin-top:0.25%; margin-left: auto;margin-right: auto;display: block;">
                <p style="float:right;text-align: center;color:white;"class="site-title"><a href="https://hotelsierradegata.wordpress.com/" rel="home"></a></p>
             </div>
         </div>
         <!-- SUBCLASS UL/LI -->     
             <div style="overflow:auto ;float:left;height:35px;width:50%;">
                 <ul class="effect-underline" id="navigation">
                     <li id="hotel" class="lista1">
                        <a href="index.php"class="hotel" href="index.php">HOTEL</a>
                        <ul class="submenu">
                           <li ><a class="lista2" href="historia.php">HISTORIA</a></li>
                           <li ><a  class="lista2" href="entorno.php">ENTORNO</a></li>
                           <li ><a class="lista2" href="servicios.php#servicios-disponibles">SERVICIOS</a></li>
                         </ul>
                   </li>
                   <li id="habitaciones" class="lista1"><a href="habitaciones.php#habitaciones-enf">HABITACIONES </a></li>
                   <li id="reservas"class="lista1"><a href="reservas.php">RESERVAS</a></li>
                   <li id="galeria" class="lista1"><a href="galeria.php">GALERIA </a></li>
                   <li id="contacto" class="lista1"><a href="contacto.php#contacto-formulario">CONTACTO </a></li>
               </ul>
             </div>   
        
    <!-- #site-navigation -->
    
    <!-- main -->
        <div id="background-image" style="height: 20%;width:100%;"> <!--IMAGE-DIV-->
            <!--BOOKING-JQUERY-->
            <div class="booking" style="position:absolute; left: 0; right: 0; margin-left: auto; margin-right: auto; width: 450px;display: none; ">
                <div style="margin-top: 20px;text-align:center;font-size:150%;border-top:1px solid white;border-left:1px solid white;border-right:1px solid white;color:white;background-color:rgba(0,95,166,0.5);">¡HAZ TU RESERVA!</div>
                <div style="text-align:center;color:white;background-color:rgba(0,95,166,0.5);border-bottom:1px solid white;border-left:1px solid white;border-right:1px solid white;">
                    <input style="font-size: 125%;margin-top:10px;" type="date" value="<?php echo date("Y-m-d");?>"> <!-- INPUT CON FECHA HOY-->
                    <br>
                    <input type="submit" value="BUSCAR" onclick="booking()" id="popup_booking" name="popup_booking" style=" font-size: 125%;margin-bottom:10px;margin-top:10px;background-color:darkcyan;">
                </div>
            </div>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
            <script src='zoomove-master/dist/zoomove.min.js' type='text/javascript'></script>
            <!-- FONDO -->
            <img  style="height:100%;width:100%;" src="images/paisaje-posible-4.jpg" data-object-fit="cover">
            
           
        </div>
    <!--CAROUSEL -->
        <script src="//code.jquery.com/jquery.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

      <!--SCRIPTS -->  
      <div id="fondo1" style="padding-top:20px;height:490px;width:100%;background-color: WHITE;;">
          <div id="carousel-id" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carousel-id" data-slide-to="0" class="active"></li>
                  <li data-target="#carousel-id" data-slide-to="1" class=""></li>
                  <li data-target="#carousel-id" data-slide-to="2" class=""></li>.
                  <li data-target="#carousel-id" data-slide-to="3" class=""></li>
                </ol>
                <!--FIRST CAROUSEL -->
                <div class="carousel-inner">
                  <div class="item active">
                   <img   style="margin-left: auto;margin-right: auto;height:450px;width:80%; box-shadow: -10px 10px 5px 5px darkcyan;"  alt="First slide" src="./images/slider_1.jpg">
                    <div class="container">
                        <div class="carousel-caption">
                          <p><a class="btn btn-lg btn-primary" href="entorno.php" role="button">ENTORNO</a>
                          </p>
                        </div>
                      </div>
                  </div>
                  <!--SECOND CAROUSEL -->
                  <div class="item">
                      <img style="margin-left: auto;margin-right: auto;height:450px;width:80%;  box-shadow: -10px 10px 5px 5px darkcyan;" data-src="holder.js/900x500/auto/#555:#5a5a5a/text:Second slide" alt="Second slide"src="./images/6.jpg" >
                    <div class="container">
                        <div class="carousel-caption">
                            <p><a class="btn btn-lg btn-primary" href="habitaciones.php#habitaciones-enf" role="button">HABITACIONES</a></p>
                        </div>
                    </div>
                  </div>
                  <!--THIRD CAROUSEL -->
                  <div class="item">
                      <img style="margin-left: auto;margin-right: auto;height:450px;width:80%;  box-shadow: -10px 10px 5px 5px darkcyan;" data-src="holder.js/900x500/auto/#555:#5a5a5a/text:Second slide" alt="Second slide" src="./images/esc-a.jpg">
                    <div class="container">
                        <div class="carousel-caption">
                            <p><a class="btn btn-lg btn-primary" href="servicios.php#servicios-disponibles" role="button">SERVICIOS</a></p>
                        </div>
                    </div>
                  </div>
                  <!--FOURTH CAROUSEL -->
                  <div class="item ">
                      <img style="margin-left: auto;margin-right: auto;height:450px;width:80%;  box-shadow: -10px 10px 5px 5px darkcyan;" data-src="holder.js/900x500/auto/#555:#5a5a5a/text:Third slide" alt="Third slide" src="./images/comedor.jpg">
                    <div class="container">
                      <div class="carousel-caption">
                          
                        <p><a class="btn btn-lg btn-primary" href="galeria.php" role="button">GALERÍA</a>
                        </p>
                      </div>
                    </div>
                 </div>
                </div>
                <a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
                <a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
              
            </div>
        </div>
      <!-- INFO HOTEL-->
      <div class="info_hotel" >
          <h1 style="font-family: 'Rokkitt',Georgia,Times New Roman,serif;">Hotel Rural Sierra de Gata</h1>
          <p>
            El hotel Rural Sierra de Gata es un hotel situado en pleno corazón de la Sierra de Gata, en el noroeste de la provincia de Cáceres. 
            <br>
            Limita al norte con la provincia de Salamanca, al oeste con Portugal y al este con las comarcas de Las Hurdes.
            <br><br>
            Te sorprenderá el paisaje, un espacio natural ideal para relajarse o para disfrutar de múltiples actividades.
            <br><br>
          </p>   
            
            
            <!--WIDGETS -->
            <div id="general_widget"style="height:50px;width: 95%;margin-left: 2%;padding-top:10px;" >
                
                <div id="wifi_widget"style="float:left;height:50%;width:30%;display:none;" >
                    <img style="width:20px;height:20px;padding: 0px 3px 0px 0px;" src="./images/wifi.svg" >
                    <label style="">Wifi gratuíto en todo el establecimiento</label>
                </div>
                <div id="parking_widget"style="float:left;height:50%;width:15%;display:none;" >
                    <img style="width:20px;height:20px;padding: 0px 3px 0px 0px;" src="./images/parking.svg" >
                    <label style="">Parking Gratuito</label>
                </div>
                <div id="gym_widget"style="float:left;height:50%;width:30%;display:none;" >
                    <img style="width:20px;height:20px;padding: 0px 3px 0px 0px;" src="./images/gym.svg" >
                    <label style="">Zona de Gimnasio disponible</label>
                </div>
                 
                 <div id="reserva_widget"style="float:left;height:50%;width:20%;display:none;" >
                    <img style="width:20px;height:20px;padding: 0px 3px 0px 0px;" src="./images/secure.svg" >
                    <label style="">Reserva Online 100% Segura</label>
                </div>
            </div>
      </div>
      
      <!--VISÍTANOS-->
     
      <div class="visitanos_b" style="height: 650px;background-color:#B7D8D8;background: url(./images/fondo-azul-2.jpg);background-image: radial-gradient(#EDEDED, darkcyan); background-size:100%;text-align: center;margin-bottom:20px;">
          <h2 style="padding-top: 60px;font-weight:bold;color:#1F2E34; font-size: 30px;font-family: 'Rokkitt',Georgia,Times New Roman,serif;">VISITANOS</h2> <!--VERTICAL ALIGN-->
          <!--MAPS-->
          <iframe style="margin-top:5%;float:left;margin-left:10%;height:300px;width:35%;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d390422.32073143416!2d-6.97071444976366!3d40.138399224511794!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd3dc1bf2d49dd35%3A0x2bfc594b5586626d!2sSierra%20de%20Gata%2C%20C%C3%A1ceres!5e0!3m2!1ses!2ses!4v1617640035787!5m2!1ses!2ses"  allowfullscreen="" loading="lazy"></iframe>
          <img style="margin-top:5%;height:300px;width:33%;border:5px inset wheat;" src="./images/ES-CC-COMNAT-Sierra_de_Gata.png" >
      </div>
      <!--FOOTER-->
      <div class="footer" style="height:250px;background-color:#1F2E34;text-align: center;overflow: auto;">
          <div style="position: relative;top:15%;left:5%;height:130px;width: 85%;margin-top:5px;">
              <div style="float:left;height:130px;width:35%;color:#d5d5d5;font-weight:bold;font-family: 'EB Garamond', serif;line-height:2; ">
                  <p style="font-size:120%;">DIRECCIÓN</p>
                  <img src="//upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Erioll_world.svg/15px-Erioll_world.svg.png" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Erioll_world.svg/15px-Erioll_world.svg.png 1x, //upload.wikimedia.org/wikipedia/commons/thumb/5/55/WMA_button2b.png/34px-WMA_button2b.png 2x" class="wmamapbutton noprint" title="Mostrar el lugar en un mapa interactivo" alt="" style="padding: 0px 3px 0px 0px; cursor: pointer;">
                  40°14′00″N 6°45′00″O
                  <br>
                  <img alt="Flag of Extremadura (with coat of arms).svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/4/4d/Flag_of_Extremadura_%28with_coat_of_arms%29.svg/20px-Flag_of_Extremadura_%28with_coat_of_arms%29.svg.png" decoding="async" width="20" height="13" class="thumbborder" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/4/4d/Flag_of_Extremadura_%28with_coat_of_arms%29.svg/30px-Flag_of_Extremadura_%28with_coat_of_arms%29.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/4/4d/Flag_of_Extremadura_%28with_coat_of_arms%29.svg/40px-Flag_of_Extremadura_%28with_coat_of_arms%29.svg.png 2x" data-file-width="750" data-file-height="500">
                  EXTREMADURA
                  <br>
                  <img alt="Flag of the province of Cáceres.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/9/95/Flag_of_the_province_of_C%C3%A1ceres.svg/20px-Flag_of_the_province_of_C%C3%A1ceres.svg.png" decoding="async" width="20" height="12" class="thumbborder" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/9/95/Flag_of_the_province_of_C%C3%A1ceres.svg/30px-Flag_of_the_province_of_C%C3%A1ceres.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/9/95/Flag_of_the_province_of_C%C3%A1ceres.svg/40px-Flag_of_the_province_of_C%C3%A1ceres.svg.png 2x" data-file-width="920" data-file-height="552">
                  CÁCERES
              </div> 
              <div style="float:left;height:130px;width:30%;">
                <img src="./images/captura de pantalla(2).png" style="height:90%;width:80%; margin-left: auto;margin-right: auto;display: block;">

              </div> 
              <div style="float:left;height:130px;width:35%;color:#d5d5d5;font-family: 'EB Garamond', serif;line-height:2; ">
                  <p style="font-size:120%;">CONTACTO</p>
                  <img src="./images/telefono.svg" alt="" style="width:20px;height:20px;padding: 0px 3px 0px 0px; cursor: pointer;">
                  927 500 11
                  <br>
                  <img src="./images/whatsap.svg" alt="" style="width:20px;height:20px;padding: 0px 3px 0px 0px; cursor: pointer;">
                  69064544
                  <br>
                  <img src="./images/email.svg" alt="" style="width:20px;height:20px;padding: 0px 3px 0px 0px; cursor: pointer;">
                  hotelsierradegata@gmail.com
                  
                  
              </div> 
              <div style=" float:left;height:40px;padding-top: 10px;width:100%;color:#d5d5d5;font-family: 'EB Garamond', serif;line-height:2; ">
                  <p style="color:#d5d5d5">© Copyright 2020. Todos los derechos reservados </p>
                  <a style="color:white;"> Aviso Legal </a> - ﻿<a style="color:white;">Política de privacidad﻿</a> - <a style="color:white;">Política de Cookies </a>
              </div> 
          </div>
          
      </div>
</body>
</html>