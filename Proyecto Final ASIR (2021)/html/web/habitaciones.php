<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>HABITACIONES-Hotel Rural Sierra de Gata</title>
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
         <script src="https://code.jquery.com/jquery-3.5.0.js"></script><!-- JQUERY -->
         <script type="text/javascript" src="jquery-3.3.1.js"></script>
         <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
            
          <style>
           body {

            overflow-x: hidden; /* Hide horizontal scrollbar */
 
            } 
  
            
           .fa {
            
            padding-top: 5px;
            text-decoration: none;
          }

          .fa:hover {
              opacity: 0.7;
          }

          .fa-facebook {
           
         margin-right:5px;
            color: grey;
          }

          .fa-twitter {
            margin-right:5px;
            color: grey;
          }
          .fa-instagram {
            margin-right:5px;
            color: grey;
          }
          
          
          .fa-rss {
            background: #ff6600;
            color: white;
          }
          
         .container {
        position: relative;
        width: 100px;
      }

    .login_icon {
      display: block;
      float:right;
      width:30px;
      height:25px;
    }

    .overlay {
      position: absolute;
      bottom: 0;
      left: 100%;
      background-color: darkcyan;
      overflow: hidden;
      width: 0;
      height: 100%;
      transition: .8s ease;
     
    }

    .container:hover .overlay{
      width: 100px;
      left: 0;
      

    }

    .text {
      color: white;
      font-size: 15px;
      position: absolute;
      top: 50%;
      left: 50%;
      -webkit-transform: translate(-50%, -50%);
      -ms-transform: translate(-50%, -50%);
      transform: translate(-50%, -50%);
      white-space: nowrap;

    }
   
    
    a.login_link  {
        color: white;
    }
          
     #navigation {
         display: block;
	list-style-type:none;
	font-size: 18px;
	font-family: 'EB Garamond', serif;
	opacity:0.8;
     }


    #navigation>li {
            float:left;
            display:block;
            list-style-type:none;
    }
    #navigation a {
            display:block;
            padding:2px 2px;
            color:#1F2E34;
            font-weight: bold;
            height:33px;
            text-align: center;
    }
    #navigation a:hover {

       border-left:4px solid white;
       border-right:4px solid white;
        transform: scale(1.1);
        color:#1F2E34;
        font-weight:bold;
        background-color: #EDEDED;
        text-decoration: underline;

    }
    #hotel {
        
       
        color: white;
    }
    li#hotel:hover{

        
        border-left:2px solid white;
        border-right:2px solid white;
        color: white;


    }
    li > ul {
      display: none;
      position: absolute;
    }

    li:hover ul {
      display:block;
      position:absolute;
       opacity: 1;
      width: 10%;
    list-style-type:none;
    padding-left: 2px;
     background-color: #EDEDED;
    }


    .lista1 {
        margin-left: 20px;

    }
    
     #habitaciones {
        text-decoration: underline;
        background-color: #e6ffb3;
        border-left:4px solid white;
        border-right:4px solid white;
        
    }
    #first_room {
            -webkit-transform: scale(1);
            transform: scale(1);
            -webkit-transition: .3s ease-in-out;
            transition: .0s ease-in-out;

    }
    
    #first_room:hover  {
            -webkit-transform: scale(1.3);
            transform: scale(1.1);
            -webkit-transition: .4s ease-in-out;
            box-shadow: 10px 30px 20px -5px darkcyan;
    }
     #second_room {
            -webkit-transform: scale(1);
            transform: scale(1);
            -webkit-transition: .3s ease-in-out;
            transition: .0s ease-in-out;
            

    }
    #second_room:hover  {
            -webkit-transform: scale(1.3);
            transform: scale(1.1);
            -webkit-transition: .4s ease-in-out;
            box-shadow: 10px 30px 20px -5px darkcyan;
    }
     #third_room {
            -webkit-transform: scale(1);
            transform: scale(1);
            -webkit-transition: .3s ease-in-out;
            transition: .0s ease-in-out;
             

    }
    #third_room:hover  {
            -webkit-transform: scale(1.3);
            transform: scale(1.1);
            -webkit-transition: .4s ease-in-out;
            box-shadow: 10px 30px 20px -5px darkcyan;
    }
    
   
    .footer a:hover {

      text-shadow:5px 5px 5px darkcyan;


    }
    
    .rooms a 
    {
        color : black;
        text-decoration: none;
    }
    .rooms a:hover
    {
        color : white;
    }

         </style>    <!-- STYLES -->
        
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
                       <div class="text"><a class="login_link" href="login/acceso.php#acceso_usuarios">Iniciar Sesi??n</a></div>
                       
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
                   <li id="habitaciones" class="lista1" ><a href="habitaciones.php#habitaciones-enf">HABITACIONES </a></li>
                   <li id="reservas"class="lista1"><a href="reservas.php">RESERVAS</a></li>
                   <li id="galeria" class="lista1"><a href="galeria.php">GALERIA </a></li>
                   <li id="contacto" class="lista1"><a href="contacto.php#contacto-formulario">CONTACTO </a></li>
               </ul>
             </div>   
          <div id="background-image" style="height: 250px;width:100%;"> <!--IMAGE-DIV-->
            <!-- FONDO -->
            <img  style="height:100%;width:100%;" src="images/paisaje-posible-4.jpg" data-object-fit="cover">
        </div>
       <!--ROOMS-->
       <div  class="rooms" style="height:750px;width:100%;background-color: #ededed;margin-top:35px;">
            <br>
            <!--ANCLA-->
            <a name="habitaciones-enf"></a>
            <h1 style="text-align:center;color:#293456;font-weight:bold;font-family: 'Rokkitt',Georgia,Times New Roman,serif;font-size:250%;padding-bottom: 40px;">HABITACIONES</h1>
            <!--FIRST ROOM-->
            <div id="first_room" style="float: left;height: 450px; width: 20%;margin-left: 10%;" >
                <div style="height:100px;width:100%;border:5px transparent;border-radius: 5px;background-color:#3b3b3b ">
                    <h1 style="padding-top: 10%;text-align:center;color:#d5d5d5;font-weight:bold;font-family: 'EB Garamond', serif;font-size:150%;">Habitaci??n Individual</h1>
                </div>
                <div style="width:100%;background-color:grey;border-radius: 10px;" >
                        <img   style="width:100%;border:5px solid transparent;" src="images/CASA-GOAS_30_INDIVIDUAL_1.jpg">
                </div>
                <div style="height:33%;width:100%;background-color:#DFE5E5;font-family: 'EB Garamond', serif;font-size:100%;text-align: center;padding-top:3%;border-radius: 5px; ">
                    <p style="">Desde <label style="color:#8b0000">40.00???</label> </p>
                    <p style="font-style: italic;">Habitaci??n Individual </p>
                    <button style="height:40px;background-color:darkcyan;"type="submit" onclick="iniciar()"><a >RESERVAR</a></button>
                </div>
            </div>
            <!--SECOND ROOM-->
            <div id="second_room" style="float: left;height: 450px; width: 20%;margin-left: 10%;"> 
                <div style="height:100px;width:100%;border:5px transparent;border-radius: 5px;background-color:#3b3b3b ">
                    <h1 style="padding-top: 10%;text-align:center;color:#d5d5d5;font-weight:bold;font-family: 'EB Garamond', serif;font-size:150%;">Habitaci??n Doble</h1>
                </div>
                <div style="width:100%;border: 1px solid black;background-color:grey;border-radius:10px; ">
                    <a >
                        <img  style="width:100%;border:5px solid transparent;" src="images/habitacion-indiv.jpg" >
                    </a>
                </div>
                <div style="height:33%;width:100%;background-color:#DFE5E5;font-family: 'EB Garamond', serif;font-size:100%;text-align: center;padding-top:3%;border-radius: 5px; ">
                    <p style="">Desde <label style="color:#8b0000">50.00???</label> </p>
                    <p style="font-style: italic;">Habitaci??n Doble </p>
                    <button style="height:40px;background-color:darkcyan;" type="submit" onclick="iniciar()"  ><a >RESERVAR</a></button>
                </div>
            </div>
            <!--THIRD ROOM-->
            <div id="third_room" style="float: left;height: 450px; width: 20%;margin-left: 10%;">
                <div style="height:100px;width:100%;border:5px transparent;border-radius:5px;background-color:#3b3b3b ">
                    <h1 style="padding-top: 10%;text-align:center;color:#d5d5d5;font-weight:bold;font-family: 'EB Garamond', serif;font-size:150%;">Suite</h1>
                </div>
                <div style="width:100%;border: 1px solid black;background-color:grey;border-radius:10px; ">
                    
                   <img  style="width:100%;border:5px solid transparent;" src="images/suite-2.jpg">
                    
                </div>
                <div style="height:33%;width:100%;background-color:#DFE5E5;font-family: 'EB Garamond', serif;font-size:100%;text-align: center;padding-top:3%;border-radius: 5px; ">
                    <p style="">Desde <label style="color:#8b0000">100.00???</label> </p>
                    <p style="font-style: italic;">Suite </p>
                    <button style="height:40px;background-color:darkcyan;" type="submit" onclick="iniciar()" ><a >RESERVAR</a></button>
                </div>
            </div>
        </div>
       <!--FOOTER-->
      <div class="footer" style="height:250px;background-color:#1F2E34;text-align: center;">
          <div style="position: relative;top:15%;left:5%;height:130px;width: 85%;margin-top:5px;">
              <div style="float:left;height:130px;width:35%;color:#d5d5d5;font-weight:bold;font-family: 'EB Garamond', serif;line-height:2; ">
                  <p style="font-size:120%;">DIRECCI??N</p>
                  <img src="//upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Erioll_world.svg/15px-Erioll_world.svg.png" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Erioll_world.svg/15px-Erioll_world.svg.png 1x, //upload.wikimedia.org/wikipedia/commons/thumb/5/55/WMA_button2b.png/34px-WMA_button2b.png 2x" class="wmamapbutton noprint" title="Mostrar el lugar en un mapa interactivo" alt="" style="padding: 0px 3px 0px 0px; cursor: pointer;">
                  40??14???00???N 6??45???00???O
                  <br>
                  <img alt="Flag of Extremadura (with coat of arms).svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/4/4d/Flag_of_Extremadura_%28with_coat_of_arms%29.svg/20px-Flag_of_Extremadura_%28with_coat_of_arms%29.svg.png" decoding="async" width="20" height="13" class="thumbborder" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/4/4d/Flag_of_Extremadura_%28with_coat_of_arms%29.svg/30px-Flag_of_Extremadura_%28with_coat_of_arms%29.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/4/4d/Flag_of_Extremadura_%28with_coat_of_arms%29.svg/40px-Flag_of_Extremadura_%28with_coat_of_arms%29.svg.png 2x" data-file-width="750" data-file-height="500">
                  EXTREMADURA
                  <br>
                  <img alt="Flag of the province of C??ceres.svg" src="//upload.wikimedia.org/wikipedia/commons/thumb/9/95/Flag_of_the_province_of_C%C3%A1ceres.svg/20px-Flag_of_the_province_of_C%C3%A1ceres.svg.png" decoding="async" width="20" height="12" class="thumbborder" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/9/95/Flag_of_the_province_of_C%C3%A1ceres.svg/30px-Flag_of_the_province_of_C%C3%A1ceres.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/9/95/Flag_of_the_province_of_C%C3%A1ceres.svg/40px-Flag_of_the_province_of_C%C3%A1ceres.svg.png 2x" data-file-width="920" data-file-height="552">
                  C??CERES
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
              <div style="float:left;height:30px;width:100%;color:#d5d5d5;font-family: 'EB Garamond', serif;line-height:2; ">
                  <p style="color:#d5d5d5">?? Copyright 2020. Todos los derechos reservados </p>
                  <a style="color:white;"> Aviso Legal </a> - ???<a style="color:white;">Pol??tica de privacidad???</a> - <a style="color:white;">Pol??tica de Cookies </a>
              </div> 
          </div>
          
      </div>
          
    </body>
</html>

         