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
</head>
      <style>
            body {
                background-color: #EDEDED;
                    height: 20em;
            }
            .welcome-div {
                background-color: #DADEDE;
                width: 50%;
                height: 15em;
                margin-left: auto;
                margin-right: auto;
               
               
            }
            .welcome-span {
               background-color: #12a6a6;
                font-size: 220%;
                 font-family: 'Rokkitt',Georgia,Times New Roman,serif;
                color: whitesmoke;
                
                
                
            }
             .welcome-span-1 {
                background-color: #12a6a6;
                font-size: 220%;
                font-family: bold;
                color: white;
                
                
                
            }
            .welcome-p  {
                
                font-size: 120%;
                font-family: bold;
                font-family: 'Rokkitt',Georgia,Times New Roman,serif;
            }
            
            .welcome-div li
            {
                font-size: 150%;
            }
            
                .title {
            letter-spacing: 1px;
            font-size: 24px;
            line-height: 32px;
            font-weight: 400;
            margin-bottom: 10px;
            text-align: center;
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
    
    
            <div class="container">
                    <div class="row">
                            <div class="col-sm-12">
                                    <div class="jumbotron">
                                        <div class="welcome-div">
                                        <center> <span class="welcome-span"> Bienvenido </span> <span class="welcome-span-1"> <?php echo ($_SESSION['user']) ?></span></center>
                                            <br><br>
                                                <ul>
                                                    <li><a href="realizar_reserva_form.php">Realizar una reserva</a></li>
                                                    <li><a href="consulta_reserva.php">Consultar mis reservas</a></li>
                                                </ul>
                                            <br>
                                            <center>
                                                <a href="../php/salir.php" class="btn btn-info" style="background-color: #D5695C">Salir del sistema</a>
                                            </center>
                                    </div>
                            </div>
                    </div>
            </div>
</body>
</html>

<?php
} else {
        
	header("location:index.php");
        
	}
 ?>
