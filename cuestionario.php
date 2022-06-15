<html lang= "es">
    <head>
    <title> CUESTIONARIO PRUEBA </title>
    <meta charset= "UTF-8">
    <meta name="viewport" content= "width = device- width, user-scalable=no,
    initial-scale1, maximum-scale=1">
        <link rel="stylesheet" href="cssInicio/estilosRegistro.css">
        <link rel="stylesheet" href="cssInicio/fontello.css">
        <link rel="stylesheet" href="cssInicio/estilos.css"> 
         
</head>


<body>
<header>
    <?php
        session_start();
        
        include 'conexion.php';
        $conn = OpenCon();
        $p1 ="";
        $p2 ="";
        $p3 ="";
        $p4 ="";
        $p5 ="";
        if (isset($_SESSION['LoginIniciado'])) {
            
            if(($_SESSION['pruebaActual'])>0){
             
             $name = $_SESSION ["nombre"];
            $email = $_SESSION['email'];
            $cedula = $_SESSION['cedula'];
            $ganadas = $_SESSION ["pruebasGanadas"];
            $cc= $_SESSION ["cedula"];
            //valido mediante consultas a la bd, los resultados del usuario, si es 0 es por que perdió
            if(mysqli_fetch_assoc(mysqli_query($conn, "SELECT superado FROM detalletest WHERE numeroPrueba=1 AND cedulaUsuario='".$cc."'"))["superado"]==1){
                $p1 ="EXITO";
            }else{
                $p1 ="FRACASO";
            }
            if(mysqli_fetch_assoc(mysqli_query($conn, "SELECT superado FROM detalletest WHERE numeroPrueba=2 AND cedulaUsuario='".$cc."'"))["superado"]==1){
                $p2 ="EXITO";
            }else{
                $p2 ="FRACASO";
            }
            if(mysqli_fetch_assoc(mysqli_query($conn, "SELECT superado FROM detalletest WHERE numeroPrueba=3 AND cedulaUsuario='".$cc."'"))["superado"]==1){
                $p3 ="EXITO";
            }else{
                $p3 ="FRACASO";
            }
            if(mysqli_fetch_assoc(mysqli_query($conn, "SELECT superado FROM detalletest WHERE numeroPrueba=4 AND cedulaUsuario='".$cc."'"))["superado"]==1){
                $p4 ="EXITO";
            }else{
                $p4 ="FRACASO";
            }
            if(mysqli_fetch_assoc(mysqli_query($conn, "SELECT superado FROM detalletest WHERE numeroPrueba=5 AND cedulaUsuario='".$cc."'"))["superado"]==1){
                $p5 ="EXITO";
            }else{
                $p5 ="FRACASO";
            }
            

            
            echo'
        <div >
        <br>
            <h1 >'.' '.$name.'</h1>
            
        <br>
        </div>
        ';
             
            }else{
        
                echo"<script type=\"text/javascript\">alert('REGISTRESE'); window.location='inicio.php';</script>";  
        
          
           }

        }else{
        
            echo"<script type=\"text/javascript\">alert('REGISTRESE'); window.location='inicio.php';</script>";  
    
      
       }
      ?>
</header>
     
    
<h1>        Califica de 1 a 5 donde 5 es la puntuacion más alta</h1>

    <form  class="formulario" action="guardarCuestionario.php" method="post">
        <input name="preg1" id="preg1" type="number" max="5" min="0" class="formulario__input" required="">
        <label  class="formulario__label">¿Recomendaria la prueba?</label>
        
        <input name="preg2" id="preg2" type="number" max="5" min="0" class="formulario__input" required="">
        <label  class="formulario__label">¿Que tan dificil fue para usted?</label>

        <input name="preg3"  id="preg3" type="number" max="5" min="0" class="formulario__input" required="">
        <label  class="formulario__label">¿Esta feliz con el resultado?</label>
        
            
              <input  type="submit" class="formulario__submit" value="Enviar"><br>
                
                <br>
        
    </form>
    <div style="position: relative;left: 200px;">
    <h2>Usted ha ganado un total de: <?php echo $ganadas ?> pruebas </h2>
    <h3>Prueba 1: <?php echo $p1 ?></h3>
    <h3>Prueba 2: <?php echo $p2 ?>  </h3>
    <h3>Prueba 3: <?php echo $p3 ?></h3>
    <h3>prueba 4: <?php echo $p4 ?> </h3>
    <h3>prueba 5: <?php echo $p5 ?> </h3>
    </div>
    <script src=javascript/form.js></script>
    
    <br><br><br><br><br><br><br><br><br><br><br><br><br>
    <footer>
    <div class="contenedor">
        <p class="copy">Analisis de Algoritmos &copy; 2022 - Santiago, Sergio, Xiomara</p>
        <div class="sociales">
            <a class="" href="https://github.com/BelsantoUQ/P_Algoritmos"></a>
            
        
        </div>
        
        
        </div>
    
    
    </footer>
    
</body>
</html>