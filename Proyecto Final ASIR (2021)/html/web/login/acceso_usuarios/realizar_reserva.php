 <?php
  require_once "conexion.php";
  $conexion=conexion();
  session_start();
                                  
                               $usuario= ($_SESSION['user']);
                                 $nombre=$_POST['nombre'];
                                  $apellidos=$_POST['apellidos'];
                                  $telefono=$_POST['telefono'];
                                  $email=$_POST['email'];
                                  $calle=$_POST['calle'];
                                  $calle_numero=$_POST['calle_numero'];
                                  $ciudad=$_POST['ciudad'];
                                  $codigo_postal=$_POST['codigo_postal'];
                                  $pais=$_POST['pais'];
                                  $fecha_entrada=$_POST['fecha_entrada'];
                                  $fecha_salida=$_POST['fecha_salida'];
                                  $personas=$_POST['personas'];
                                  $habitaciones=$_POST['habitaciones'];
                                  $servicios=$_POST['servicios'];
                                  
	 $sql = "INSERT INTO reservas (usuario,nombre,apellidos,telefono,email,calle,calle_numero,
            ciudad,codigo_postal,pais,fecha_entrada,fecha_salida,personas,habitaciones,servicios)
	 VALUES ('$usuario','$nombre','$apellidos','$telefono','$email','$calle','$calle_numero', '$ciudad','$codigo_postal','$pais','$fecha_entrada','$fecha_salida','$personas','$habitaciones','$servicios')";
            
	  if (mysqli_query($conexion, $sql)) {
		echo'<script type="text/javascript">
                alert("Se ha registrado correctamente su reserva, nos pondremos en contacto a la mayor brevedad");
                window.location.href="inicio.php";
                </script>';
                 
                
          } else {
		echo "Error: " . $sql . "" . mysqli_error($conexion);
	 }
	 mysqli_close($conexion);
?>