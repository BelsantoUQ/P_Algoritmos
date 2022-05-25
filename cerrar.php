<?php
session_start();
if( $_SESSION ["pruebaActual"] == 2){
    
    session_destroy();
    header ('location: inicio.php');

}else if($_SESSION ["pruebaActual"] == 1){

    header ('location: prueba2.php');
}
?>
