<?php
include 'conexion.php';
global $num;
$num = 0;
$conn = OpenCon();
session_start();
//obtengo los datos de la sesion actual
$usua = filter_input(INPUT_POST, 'loginCedula');
$name = filter_input(INPUT_POST, 'loginName');
$email = filter_input(INPUT_POST, 'loginEmail');
//** */
$codTest = $usua.$name."";
$calificacion = 0;

$log = mysqli_query($conn,'INSERT INTO `usuario`(`cedula`, `nombre`, `email`) VALUES ("'.$usua.'","'.$name.'","'.$email.'")'); //ingreso el usuario que va a iniciar el test a la base de datos
$regTest = mysqli_query($conn,'INSERT INTO `test`(`codigo`,`calificacion`) VALUES ("'.$codTest.'" , "'.$calificacion.'")'); //creo un test donde la calificacion inicial es 0 y el codigo es la cedula+nombre
$nameR = mysqli_query($conn,"SELECT `nombre` FROM  `usuario` WHERE `cedula` = '$usua'"); //valido que si haya quedado guardado haciendo una consulta que me devuelva el usuario que acabo de crear
$valTest = mysqli_query($conn,"SELECT `calificacion` FROM  `test` WHERE `codigo` = '$codTest'"); //valido que el test si haya quedado guardado tambien
if (mysqli_num_rows($valTest)>0 && mysqli_num_rows($nameR)>0){ // valido las ultimas dos consultas no sean vacias
  //inicializo en la sesion datos necesarios     
  $row = mysqli_fetch_array($nameR); 
      $_SESSION ["cedula"] = $usua; 
      $_SESSION ["nombre"] = $row ['nombre'];
      $_SESSION ["email"] = $email;
      $_SESSION ["pruebaActual"] = '0';
      $_SESSION ["pruebasGanadas"] = '0';
      $_SESSION ["LoginIniciado"] = '1';
      header ('location: prueba1.php');
     
  }
  else{
      
    //si hay algun error retorna a inicio
    echo"<script type=\"text/javascript\">alert('ERROR AL REGISTRARSE'); window.location='inicio.php';</script>";  
    
    
    }  
      
      
  
    CloseCon($conn);

  ?>