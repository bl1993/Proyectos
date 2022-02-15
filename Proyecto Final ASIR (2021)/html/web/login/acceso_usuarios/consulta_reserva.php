
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
                    height: 50em;
            }
            .welcome-div {
                background-color: #DADEDE;
                width: 99%;
                height: 50em;
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
        .table_result
        {
            
            margin-left:auto;
            margin-right:auto;
        }
        .table_result th
        {
           
            background-color: #A5D8DA;
            text-align: center;
            padding: 10px 10px 10px 5px;
            
        }
        .table_result tr 
        {
           
            text-align: center;
           
           
        }
        .table_result td 
        {
             padding: 0px 0px 0px 5px;
            
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
                                        <center><span class="welcome-span">Usuario:  </span><span id="usuario" class="welcome-span-1"><?php  echo ($_SESSION['user']) ?></span></center>
                                        <div>
                                            <br>
                                                <?php
                                                $usuario=($_SESSION['user']);
                                                $bd=new mysqli();
                                                $bd->connect('localhost','root','1234','hotelSierraDeGata');
                                                $resultado=$bd->query("Select * from reservas where usuario='$usuario'");
                                                $error=$bd->connect_errno;
                                                if ($error!=null)
                                                {
                                                ?>
                                                    <p Style="color:red">
                                                    <?php
                                                    print "Error " .$error ." al conectar con la base de datos";
                                                     ?>
                                                <?php
                                                
                                                } 
                                                
                                                elseif ($resultado->num_rows == 0)
                                                {
                                                    print "<h2><center>No existen reservas asociadas a '$usuario'</center></h2>";
                                                    echo'<script type="text/javascript">
                                                    $(document).ready(function() {
                                                    $(".welcome-div").css({ "width":"99%", "height":"20em" });
                                                     })</script>';
                                                    
                                                }
                                                else
                                                {   
                                                    $resultado=$bd->query("Select * from reservas where usuario='$usuario'");
                                                    $datos=$resultado->fetch_array();
                                                    
                                                        print ("<h1 style=color:#898989;><center>Tus reservas son las siguientes: <br><br></center> </h1>");
                                                            print "<table border='2'  class='table_result'  >";
                                                                print "<tr>";
                                                                print "<th>ID_RESERVA";
                                                                print " <th> USUARIO";
                                                                print "<th>NOMBRE";
                                                                print "<th>APELLIDOS";
                                                                print "<th>TELEFONO";
                                                                print "<th>EMAIL";
                                                                print "<th>FECHA ENTRADA";
                                                                print "<th>FECHA SALIDA";
                                                                print "<th>PERSONAS";
                                                                print "<th>HABITACION";
                                                                print "<th>SERVICIOS";
                                                                print "</th>";
                                                                print "</tr>";
                                                           
                                                                print "<td>".$datos[0]."</td>";
                                                                
                                                                print "<td>".$datos[1]."</td>";

                                                                print "<td>".$datos[2]."</td>";

                                                                print "<td>".$datos[3]."</td>";

                                                                print "<td>".$datos[4]."</td>";

                                                                print "<td>".$datos[5]."</td>";

                                                                print "<td>".$datos[11]."</td>";

                                                                print "<td>".$datos[12]."</td>";

                                                                print "<td>".$datos[13]."</td>";

                                                                print "<td>".$datos[14]."</td>";
                                                                print "<td>".$datos[15]."</td>";
                                                               while($row=mysqli_fetch_array($resultado))
                                                            {
                                                                print "<tr>";
                                                                print "<td>$row[0]";
                                                                print "<td>$row[1]";
                                                                print "<td>$row[2]";
                                                                print "<td>$row[3]";
                                                                print "<td>$row[4]";
                                                                print "<td>$row[5]";
                                                                
                                                                print "<td>$row[11]";
                                                                print "<td>$row[12]";
                                                                print "<td>$row[13]";
                                                                print "<td>$row[14]";
                                                                 print "<td>$row[15]";
                                                        }   
                                                        
                                                        print "</table>";
                                                         } 
                                                
                                                  
                                                ?>
                                        </div>
                                      
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