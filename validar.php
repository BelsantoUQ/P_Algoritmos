<?php
include 'conexion.php';
global $num;
$num = 0;
$conn = OpenCon();
session_start();

$usua = filter_input(INPUT_POST, 'loginCedula');
$name = filter_input(INPUT_POST, 'loginName');
$email = filter_input(INPUT_POST, 'loginEmail');
$log = mysqli_query($conn,'INSERT INTO `usuario`(`cedula`, `nombre`, `email`) VALUES ("'.$usua.'","'.$name.'","'.$email.'")');
$nameR = mysqli_query($conn,"SELECT `nombre` FROM  `usuario` WHERE `cedula` = '$usua'");
if (mysqli_num_rows($nameR)>0){
      $row = mysqli_fetch_array($nameR);
      $_SESSION ["cedula"] = $usua; 
      $_SESSION ["nombre"] = $row ['nombre'];
      $_SESSION ["email"] = $email;
      $_SESSION ["pruebaActual"] = '0';
      $_SESSION ["LoginIniciado"] = '1';
      header ('location: prueba1.php');
     
  }
  else{
      
    
    echo"<script type=\"text/javascript\">alert('Usuario o contraseña no coinciden'); window.location='inicio.php';</script>";  
    
    
    }  
      
      
  


    mysqli_close($conexion);

  ?>