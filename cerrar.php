<?php
session_start();
if( $_SESSION ["pruebaActual"] == 3){
    
    header ('location: cuestionario.php');

}else if($_SESSION ["pruebaActual"] == 2){

    header ('location: prueba3.php');
}else if($_SESSION ["pruebaActual"] == 1){

    header ('location: prueba2.php');
}
?>
