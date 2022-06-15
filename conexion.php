
<?php
function OpenCon()
{
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "analisis_proyecto";
//creo la conexion con la base de datos
$conexion = new mysqli($dbhost, $dbuser, $dbpass, $db);

 return $conexion;
}



function CloseCon($conexion)
 {
    $conexion -> close();
 }
?>