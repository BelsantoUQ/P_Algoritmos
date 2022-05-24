<?php

include 'conexion.php';
global $num;
$num = 0;
$conexion = OpenCon();
session_start();


    

$movimientos = utf8_decode($_POST['movimientos']);
$giros = utf8_decode($_POST['giros']);
$repetidos = utf8_decode($_POST['repetidos']);

$totalPrueba = 0;

$output = wordwrap("Resultado: ".$repetidos, 60, "<br>");
$numeroPrueba=$_SESSION ["pruebaActual"];
$cedulaUser = $_SESSION['cedula'];
$resultado = mysqli_query($conexion, "SELECT * FROM `test`");
$numrows = mysqli_num_rows($resultado);

$resDetalleTest='INSERT INTO `detalletest`(`user_id`, `test_id`, `calificacionTest`, `calificacionPrueba`, `numeroPrueba`) VALUES ("'.$cedulaUser.'","'.$numrows.'","'.$movimientos.'","'.$movimientos.'","'.$numeroPrueba.'")';
$registrarTest = mysqli_query($conexion,$resDetalleTest);
if($registrarTest){
    echo $output;
}

?>