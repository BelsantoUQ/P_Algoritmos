<?php 
$extenciones= array();
$extenciones= get_loaded_extensions();
include 'conexion.php';
$conn = OpenCon();


$numrowsX=0;
$numrowsY=0;
$arrayX= array();
$arrayY= array();
$correlacion= array();

$promedio1= 100 *mysqli_fetch_assoc(mysqli_query($conn, "SELECT AVG(superado) FROM detalletest WHERE numeroPrueba=1"))["AVG(superado)"];
$promedio2= 100 *mysqli_fetch_assoc(mysqli_query($conn, "SELECT AVG(superado) FROM detalletest WHERE numeroPrueba=2"))["AVG(superado)"];
$promedio3= 100 *mysqli_fetch_assoc(mysqli_query($conn, "SELECT AVG(superado) FROM detalletest WHERE numeroPrueba=3"))["AVG(superado)"];
$promedio4= 100 *mysqli_fetch_assoc(mysqli_query($conn, "SELECT AVG(superado) FROM detalletest WHERE numeroPrueba=4"))["AVG(superado)"];
$promedio5= 100 * mysqli_fetch_assoc(mysqli_query($conn, "SELECT AVG(superado) FROM detalletest WHERE numeroPrueba=5"))["AVG(superado)"];

$promedioQ1= mysqli_fetch_assoc(mysqli_query($conn, "SELECT AVG(preg1) FROM test"))["AVG(preg1)"];
$promedioQ2= mysqli_fetch_assoc(mysqli_query($conn, "SELECT AVG(preg2) FROM test"))["AVG(preg2)"];
$promedioQ3= mysqli_fetch_assoc(mysqli_query($conn, "SELECT AVG(preg3) FROM test"))["AVG(preg3)"];

$pregCorrecta1= mysqli_fetch_assoc(mysqli_query($conn, "SELECT COUNT(numeroPrueba) FROM detalletest WHERE numeroPrueba=1 AND superado=1"))["COUNT(numeroPrueba)"];
$pregIncorrecta1= mysqli_fetch_assoc(mysqli_query($conn, "SELECT COUNT(numeroPrueba) FROM detalletest WHERE numeroPrueba=1 AND superado=0"))["COUNT(numeroPrueba)"];

$pregCorrecta2= mysqli_fetch_assoc(mysqli_query($conn, "SELECT COUNT(numeroPrueba) FROM detalletest WHERE numeroPrueba=2 AND superado=1"))["COUNT(numeroPrueba)"];
$pregIncorrecta2= mysqli_fetch_assoc(mysqli_query($conn, "SELECT COUNT(numeroPrueba) FROM detalletest WHERE numeroPrueba=2 AND superado=0"))["COUNT(numeroPrueba)"];


$pregCorrecta3= mysqli_fetch_assoc(mysqli_query($conn, "SELECT COUNT(numeroPrueba) FROM detalletest WHERE numeroPrueba=3 AND superado=1"))["COUNT(numeroPrueba)"];
$pregIncorrecta3= mysqli_fetch_assoc(mysqli_query($conn, "SELECT COUNT(numeroPrueba) FROM detalletest WHERE numeroPrueba=3 AND superado=0"))["COUNT(numeroPrueba)"];


$pregCorrecta4= mysqli_fetch_assoc(mysqli_query($conn, "SELECT COUNT(numeroPrueba) FROM detalletest WHERE numeroPrueba=4 AND superado=1"))["COUNT(numeroPrueba)"];
$pregIncorrecta4= mysqli_fetch_assoc(mysqli_query($conn, "SELECT COUNT(numeroPrueba) FROM detalletest WHERE numeroPrueba=4 AND superado=0"))["COUNT(numeroPrueba)"];


$pregCorrecta5= mysqli_fetch_assoc(mysqli_query($conn, "SELECT COUNT(numeroPrueba) FROM detalletest WHERE numeroPrueba=5 AND superado=1"))["COUNT(numeroPrueba)"];
$pregIncorrecta5= mysqli_fetch_assoc(mysqli_query($conn, "SELECT COUNT(numeroPrueba) FROM detalletest WHERE numeroPrueba=5 AND superado=0"))["COUNT(numeroPrueba)"];

$listadoUsers = mysqli_query($conn, "SELECT DISTINCT u.nombre, t.calificacion, u.email FROM detalletest d, usuario u, test t WHERE d.cedulaUsuario=u.cedula AND t.codigo=d.codigoTest ORDER BY t.calificacion DESC"); // resultados de la prueba 1

$resultadoX = mysqli_query($conn, "SELECT superado FROM detalletest WHERE numeroPrueba=1"); // resultados de la prueba 1
$resultadoY = mysqli_query($conn, "SELECT preg1 FROM test");//resultados del cuestionario 1
$numrowsX = mysqli_num_rows($resultadoX);
$numrowsY = mysqli_num_rows($resultadoY);
if($numrowsX>0 || $numrowsY>0){
    if($numrowsX==$numrowsY){
        while($row=mysqli_fetch_assoc($resultadoY)){
            $arrayY[]=$row["preg1"];
        }
        while($row=mysqli_fetch_assoc($resultadoX)){
            $arrayX[]=$row["superado"];
        }
    }
    $correlacion= trader_correl($arrayX, $arrayY, $numrowsY);
    $coeficienteCorrel= $correlacion[$numrowsY-1];
   

    
}
?>
<html>

</html>