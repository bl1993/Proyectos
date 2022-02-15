

<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="js/alertifyjs/css/themes/default.css">
<link rel="stylesheet" type="text/css" href="js/alertifyjs/css/alertify.css">
<script src="js/jquery-3.2.1.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script><!-- SWEETALERT-->
<script src="js/alertifyjs/alertify.js"></script><!-- ALERTIFY-->
<!--INDEX-->
<script src="dist/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="dist/sweetalert.css">


        <script src="http://code.jquery.com/jquery-latest.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
            $('.booking').fadeIn(3500);
             });
        </script>
        
         <script type="text/javascript"> 
            function booking() {
                    swal({
         title: "Error",
         text: "Para reservar, necesitas INICIAR SESIÓN!",
         type: "success"
     }).then(function() {
         window.location = "login/acceso.php#acceso_usuarios";
     });
}
                
    </script>
    <script type="text/javascript"> 
            function reserva() {
                    swal({
         title: "Error",
         text: "Para reservar, necesitas INICIAR SESIÓN!",
         type: "success"
     }).then(function() {
         window.location = "login/acceso.php#acceso_usuarios";
     });
}
                
    </script>
        </script>
            <!--JQUERY WIDGETS-->
             <script src="http://code.jquery.com/jquery-latest.js"></script>
            <script type="text/javascript">
                $(document).ready(function() {
               
                $('#wifi_widget').fadeIn(8500);
                $('#parking_widget').fadeIn(9500);
                $('#gym_widget').fadeIn(10500);
                $('#reserva_widget').fadeIn(11000);
                 });
            </script>
            <!--ROOMS BOOKING-->
            <script type="text/javascript">
               function iniciar()
               {
                      swal({
                    title: "Error",
                    text: "Para reservar, necesitas INICIAR SESIÓN",
                    type: "success"
                }).then(function() {
                    window.location = "login/acceso.php#acceso_usuarios";
                });
                }

            </script>
            <!--SCRIPT DETECT´S WEB BROWSER-->
            <script type="text/javascript"> 
            
            var detectarNavegador = window.navigator.userAgent;
            var chrome = /Chrome/;
            var firefox = /Firefox/;
            var opera = /OPR/;
            var edge = /Edge/;
            var safari = /Safari/;
            var navegador;
            if(chrome.test(detectarNavegador) && !(opera.test(detectarNavegador)) && !(edge.test(detectarNavegador))){
                    navegador = 'Google Chrome';
            }else if(firefox.test(detectarNavegador)){
                    navegador = 'Firefox Mozilla';
                    alert('Usted está utilizando:  '+navegador +
                  '\n Esta página está optimizada para Google Chrome');
                    
            }else if(safari.test(detectarNavegador) && !(chrome.test(detectarNavegador))){
                    navegador = 'Apple Safari';
                    alert('Usted está utilizando:  '+navegador +
                  '\n Esta página está optimizada para Google Chrome');
            }else if(opera.test(detectarNavegador)){
                    navegador = 'Opera';
                    alert('Usted está utilizando:  '+navegador +
                  '\n Esta página está optimizada para Google Chrome');
            }else if(edge.test(detectarNavegador)){
                    navegador = 'Microsoft Edge';
                    alert('Usted está utilizando:  '+navegador +
                  '\n Esta página está optimizada para Google Chrome');
            }else{
                    navegador = 'un navegador desconocido';
                    alert('Usted está utilizando:  '+navegador +
                  '\n Esta página esta optimizada para Google Chrome');
            }
        </script> 