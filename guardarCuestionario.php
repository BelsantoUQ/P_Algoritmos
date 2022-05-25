
<?php
include 'conexion.php';
global $num;
$num = 0;
$conn = OpenCon();
session_start();

$preg1 = filter_input(INPUT_POST, 'preg1');
$preg2 = filter_input(INPUT_POST, 'preg2');
$preg3 = filter_input(INPUT_POST, 'preg3');
$cedulaUser = $_SESSION['cedula'];
$name = $_SESSION ["nombre"];
$pActual = $_SESSION ["pruebaActual"];
$codTest = $cedulaUser.$name."";
$regTest = mysqli_query($conn,' UPDATE `detalletest` SET `preg1`='.$preg1.',`preg2`='.$preg2.',`preg3`='.$preg3.' WHERE `cedulaUsuario`="'.$cedulaUser.'" AND `codigoTest`="'.$codTest.'"');
$valTest = mysqli_query($conn,' SELECT `preg1` FROM `detalletest` WHERE `cedulaUsuario`="'.$cedulaUser.'" AND `codigoTest`="'.$codTest.'" AND `numeroPrueba`= '.$pActual);

if (mysqli_num_rows($valTest)>0){
      header ('location: cerrar.php');
     
  }
  else{
      
    
    echo"<script type=\"text/javascript\">alert('Error al guardar'); window.location='inicio.php';</script>";  
    
    
    }  
      
      
  


    mysqli_close($conexion);

  ?>