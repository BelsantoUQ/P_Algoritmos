<?php

include 'conexion.php';
global $num;
$num = 0;
$conn = OpenCon();
session_start();

    

$movimientos = utf8_decode($_POST['movimientos']);
$giros = utf8_decode($_POST['giros']);
$repetidos = utf8_decode($_POST['repetidos']);
$superado = utf8_decode($_POST['superado']);
$pGanadas= 0;
$ganador = "FALLIDO";
$numeroPrueba=$_SESSION ["pruebaActual"];
$cedulaUser = $_SESSION['cedula'];
$name = $_SESSION ["nombre"];
$codTest = $cedulaUser.$name."";
$url="cerrar.php";

if($superado==1){
    $ganador= "GANADO";
    $_SESSION ["pruebasGanadas"]++;
    $pGanadas= $_SESSION ["pruebasGanadas"];
    
    $ingresarWin = 'UPDATE `test` SET `calificacion`= '.$pGanadas.' WHERE `codigo`= "'.$codTest.'"';//si la prueba es superada con exito entonces guardo el resultado en la bd
    $registrarWin = mysqli_query($conn,$ingresarWin);
}//devuelvo informacion sopre la ronda ademas de un boton para que continué a la siguiente prueba
$output = wordwrap($ganador." -> cuadros repetidos: ".$repetidos." - giros: ".$giros." - movimientos: ".$movimientos."  <a href=".$url.">Continuar</a>", 60, "<br>"); 

$resDetalleTest='INSERT INTO `detalletest`(`cedulaUsuario`, `codigoTest`, `numeroPrueba`, `superado`) VALUES ("'.$cedulaUser.'","'.$codTest.'","'.$numeroPrueba.'","'.$superado.'")';//guardo los datos sobre la prueba en la bd
$registrarTest = mysqli_query($conn,$resDetalleTest);
echo $output;
?>