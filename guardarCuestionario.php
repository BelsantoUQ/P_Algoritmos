
<?php
include 'conexion.php';
global $num;
$num = 0;
$conn = OpenCon();
session_start();
//guardo datos ingresados en variables
$preg1 = filter_input(INPUT_POST, 'preg1');
$preg2 = filter_input(INPUT_POST, 'preg2');
$preg3 = filter_input(INPUT_POST, 'preg3');
$cedulaUser = $_SESSION['cedula'];
$name = $_SESSION ["nombre"];
$pActual = $_SESSION ["pruebaActual"];
$codTest = $cedulaUser.$name."";
$regTest = mysqli_query($conn,' UPDATE `test` SET `preg1`='.$preg1.',`preg2`='.$preg2.',`preg3`='.$preg3.' WHERE `codigo`="'.$codTest.'"'); //guardo en la base de datos
$valConsultaTest = mysqli_query($conn,' SELECT `preg1` FROM `test` WHERE `codigo`="'.$codTest.'"'); //valido que si exista lo que acabo de guardar

if (mysqli_num_rows($valConsultaTest)>0){
  
  session_destroy();//cierro la sesion del usuario
  header ('location: inicio.php');//redirecciono a inicio
     
  }
  else{
      
    
    echo"<script type=\"text/javascript\">alert('Error al guardar'); window.location='inicio.php';</script>";  
    
    
    }  
      
      
  


    mysqli_close($conexion);

  ?>