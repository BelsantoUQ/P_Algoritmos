
<?php
function OpenCon()
{
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "analisis_proyecto";



$conexion = new mysqli($dbhost, $dbuser, $dbpass, $db);

 return $conexion;
}
if ($conexion->connect_error) {

 die("La conexion falló: " . $conexion->connect_error);

}

function CloseCon($conexion)
 {
    $conexion -> close();
 }
?>