<?php
require("includes/db/Conexion.php");


  session_start();
  $_SESSION['nombreusu'] = ""; 

  

 if (isset($_POST['btn_inicio_s'])) {
  $usuario = $_POST['userEmail'];
  $clave = $_POST['password'];

  $sql="SELECT * FROM registro_sesion WHERE correo='$usuario' AND clave='$clave'";
  $result=mysqli_query($conection, $sql);

    if ($result->num_rows > 0) {
       
      $rows = mysqli_fetch_assoc($result);
      $_SESSION['nombreusu'] = $rows['nombre'];
      header("location: ./index.php");
    }else{
      echo"no logro entrar";
      
    }

 }
  
  


?>