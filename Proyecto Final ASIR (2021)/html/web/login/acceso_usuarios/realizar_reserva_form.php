
<?php 
	session_start();

	if(isset($_SESSION['user'])){
        
 ?>

 <!DOCTYPE html>
<html>
<head>
	<title>Inicio</title>
	<?php require_once "../scripts.php"; ?>

        <!-- jQuery -->
    <script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
    <!-- Bootstrap JS -->
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <!-- Form JS -->
    <script src="js/formscript.js" type="text/javascript"></script>
    <!-- Bootstrap Datepicker JS -->
    <script src="js/bootstrap-datepicker.js" type="text/javascript"></script>
      <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
            
        
        
        <style>
            body {
                background-color: #EDEDED;
                    height: 140em;
            }
            .welcome-div {
                background-color: #DADEDE;
                width: 80%;
                height: 120em;
                margin-left: auto;
                margin-right: auto;
               
               
            }
            .welcome-span {
                
                font-size: 220%;
                font-family: 'Rokkitt',Georgia,Times New Roman,serif;
                color: #615F58;
                
                
                
            }
             .welcome-span-1 {
                background-color: #12a6a6;
                font-size: 220%;
                color: white;
                
                
                
            }
            .welcome-p  {
                
                font-size: 120%;
                font-family: bold;
                font-family: 'Rokkitt',Georgia,Times New Roman,serif;
            }
            
                .title {
            letter-spacing: 1px;
            font-size: 24px;
            line-height: 32px;
            font-weight: 400;
            margin-bottom: 10px;
            text-align: center;
            color:#615F58;
            }

        .title-description {
            margin-bottom: 10px;
            color: rgba(255, 255, 255, 0.62);
        }

        .title-description a {
            color: #FFFFFF;
        }
        #booking {
           
            margin-left: auto;
            margin-right: auto;
            background: #fff;
            padding: 30px 20px;
            position: relative;
            width: 90%;
            border-radius: 20px;
            
        }
        input[type=email], input[type=text], input[type=datepicker], input[type=textarea], input[type=password], input[type=number]
        {
            margin-left: auto;
            margin-right: auto;
             position: relative;
            z-index: 2;
            margin-bottom: 30px;
            width: 80%;
            display: block;
            border: none;
            padding: 10px 0;
            border-bottom: solid 1px #d2d2d2;
            transition: all .4s cubic-bezier(.64, .09, .08, 1);
            background: linear-gradient(to bottom, rgba(255, 255, 255, 0) 96%, darkcyan 96%);
            background-position: -1920px 0;
            background-size: 100%;
            background-repeat: no-repeat;
            color: #000;
            font-size: 14px;
            font-weight: 100;
    
        }
            

        input[type=email].input-active,
        input[type=email]:focus,
        input[type=text].input-active,
        input[type=text]:focus,
        input[type=datepicker].input-active,
        input[type=datepicker]:focus,
        input[type=textarea].input-active,
        input[type=textarea]:focus,
        input[type=password].input-active,
        input[type=password]:focus,
        input[type=number].input-active,
        input[type=number]:focus {
            background-position: 0 0;
            box-shadow: none;
            outline: 0;
        }

        label {
            color: #898989;
            font-size: 14px;
            font-weight: 300;
            transition: all .3s cubic-bezier(.64, .09, .08, 1);
            margin-left: 10%;
        }
        
        input[type=date], select
        {
            margin-left: 10%;
            
            
            
            
        }
        .form-control 
        {
            width: 20%;
           
            
        }

        



        </style>
</head>
<body>
    <img src="../images/logo-1 (2).png" style="width:25%; margin-left: auto;margin-right: auto;display: block;">
    <br>
            <div class="container">
                    <div class="row">
                            <div class="col-sm-12">
                                    <div class="welcome-div">
                                        <br>
                                        
                                        <center><span class="welcome-span">Usuario: </span> <span id="usuario" class="welcome-span-1"><?php  echo ($_SESSION['user']) ?></span></center>
                                            <br><br>
                                            <form method="post"  name="booking" id="booking" action="realizar_reserva.php"  >
                                                <p class="title">REALIZA TU RESERVA</p>
                                                <br><br>
                                                <div class="row-text">
                                                    <div>
                                                        <label>Nombre</label>
                                                        <input type="text" name="nombre" id="nombre" required /> 

                                                    </div>                                                   
                                                    <div >
                                                        
                                                        <label>Apellidos</label>
                                                        <input type="text" name="apellidos" id="apellidos" required />
                                                       
                                                    </div>
                                                    <div >
                                                        
                                                        <label>Teléfono</label>
                                                        <input type="text"  name="telefono" id="telefono" required />
                                                       
                                                    </div>
                                                    <div >
                                                        
                                                        <label>Email</label>
                                                        <input type="text"  name="email" id="email" required />
                                                       
                                                    </div>
                                                    <div >
                                                        
                                                         <label>Calle</label>
                                                         <input type="text" name="calle" id="calle" required /> 
                                                       
                                                    </div>
                                                    <div >
                                                        
                                                        <label>Nº</label>
                                                        <input type="text" name="calle_numero" id="calle_numero" required /> 
                                                       
                                                    </div>
                                                    <div >
                                                        
                                                        <label>Ciudad</label>
                                                         <input type="text" name="ciudad" id="ciudad" required /> 
                                                       
                                                    </div>
                                                    <div >
                                                        
                                                        <label>Código postal</label>
                                                        <input type="text" name="codigo_postal" id="codigo_postal" required />  
                                                       
                                                    </div>
                                                    <div >
                                                        
                                                        <label>País</label>
                                                        <input type="text" name="pais" id="pais" required /> 
                                                       
                                                    </div>
                                                    <br>
                                                    <div class="date-inpt">
                                                        
                                                        <label>Fecha ingreso</label>
                                                        <br><br>
                                                        <?php //Tomorrow's timestamp
                                                            $timestamptoday = strtotime("today");

                                                        ?>
                                                        <input type="date" name="fecha_entrada" id="fecha_entrada" value="<?php echo date("Y-m-d", $timestamptoday);?>">
                                                       
                                                    </div>
                                                    <br>
                                                    <div class="date-inpt" >
                                                        
                                                        <label>Fecha salida</label>
                                                        <br><br>
                                                        <?php //Tomorrow's timestamp
                                                            $timestamptomorrow = strtotime("tomorrow");

                                                        ?>
                                                         <input type="date" name="fecha_salida" id="fecha_salida" value="<?php echo date("Y-m-d", $timestamptomorrow);?>">
                                                       
                                                    </div>
                                                    <br>
                                                    <div class="date-inpt">
                                                        <label>Personas</label>
                                                        <br>
                                                        
                                                            <select class='form-control' required name="personas" id="personas">
                                                                                      <option value="">--Selecciona--</option>
                                                                                      <option value="1">1</option>
                                                                                      <option value="2" selected="">2</option>
                                                                                      <option value="3">3</option>
                                                            </select>
                                                        
                                                    </div>  
                                                       
                                                    
                                                    <br>
                                                    <div class="date-inpt" >
                                                        <label>Habitaciones</label>
                                                        <br>
                                                        
                                                            <select class="form-control" required name="habitaciones" id="habitaciones">
                                                                                            <option value="">--Selecciona--</option>
                                                                                            <option value="Individual" selected="">Individual</option>
                                                                                            <option value="Doble">Doble</option>
                                                                                            <option value="Suite">Suite</option>
                                                            </select> 
                                                        <br>
                                                        <label>Servicios</label>
                                                        <br>
                                                             <select class="form-control" required name="servicios" id="servicios">
                                                                                            <option value="">--Selecciona--</option>
                                                                                            <option value="Ninguna" >Ninguna</option>
                                                                                            <option value="Rutas" >Rutas (+10€)</option>
                                                                                            <option value="Escalada">Escalada (+25€)</option>
                                                                                            <option value="Paintball">Paintball (+50€)</option>
                                                            </select>   
                                                       
                                                    </div>
                                                    <br>
                                                    <center>
                                                        <input type="submit"  name="enviar" id="submit_booking"  class="btn btn-info" style="background-color: #04AA6D;width: 15%;"> 
                                                    </center>
                                                </div>
                                                
                                            </form>
                                            
                                            <center>
                                                <br>
                                                    <a href="inicio.php" class="btn btn-info"> Volver a mi cuenta</a>
                                                   <a href="../php/salir.php" class="btn btn-info" style="background-color:#D5695C;">Salir del sistema</a>
                                            </center>
                                    </div>
                            </div>
                                
                    </div>
                </div>
            
          
             <?php
            }
        
        else {

                header("location:index.php");
        }        
                
 ?>

</body>            
</html>
     <script type="text/javascript">
                $(document).ready(function(){
		$('#submit_booking').click(function(){
                    if($('#nombre').val()==""){
				alertify.alert("Debes agregar el nombre");
				return false;
			}else if($('#apellidos').val()==""){
				alertify.alert("Debes agregar el apellido");
				return false;
			}else if($('#telefono').val()==""){
				alertify.alert("Debes agregar el teléfono");
				return false;
			}
                        else if($('#fecha_entrada').val()==""){
				alertify.alert("Debes agregar la fecha de entrada");
				return false;
			}
                        else if($('#fecha_salida').val()==""){
				alertify.alert("Debes agregar la fecha de salida");
				return false;
			}
                        else if($('#personas').val()==""){
				alertify.alert("Debes agregar el número de personas");
				return false;
			}
                        else if($('#habitaciones').val()==""){
				alertify.alert("Debes agregar el tipo de habitación");
				return false;
			}
                   
                });
                });
                
                
              </script>
            
   