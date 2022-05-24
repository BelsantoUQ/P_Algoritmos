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

        if (isset($_SESSION['LoginIniciado'])) {
            
            if(($_SESSION['pruebaActual'])>0){
             
             $name = $_SESSION ["nombre"];
            $email = $_SESSION['email'];
            $cedula = $_SESSION['cedula'];
        
            
            echo'
        <li>
            <h1 class="icon-cab" href="">'.' '.$name.'</h1>
            <h2 class="icon-cab" href="">'.' Prueba '.$_SESSION['pruebaActual'].'</h2>
            
        </li>
        ';
             
            }else{
        
                echo"<script type=\"text/javascript\">alert('REGISTRESE'); window.location='inicio.php';</script>";  
        
          
           }

        }else{
        
            echo"<script type=\"text/javascript\">alert('REGISTRESE'); window.location='inicio.php';</script>";  
    
      
       }
    ?>
</header>
     
    
<h1>Califica de 1 a 5 donde 5 es la puntuacion más alta</h1>
        
    <form  class="formulario" action="guardarCuestionario.php" method="post">
        <h1 class="formulario__titulo">Cuestionario de la prueba <?php echo $_SESSION['pruebaActual']."";?></h1>
        <input name="preg1" id="preg1" type="number" max="5" min="0" class="formulario__input" required="">
        <label  class="formulario__label">¿Recomendaria la prueba?</label>
        
        <input name="preg2" id="preg2" type="number" max="5" min="0" class="formulario__input" required="">
        <label  class="formulario__label">¿Que tan dificil fue para usted?</label>

            <input name="preg3"  id="preg3" type="number" max="5" min="0" class="formulario__input" required="">
        <label  class="formulario__label">¿Esta feliz con el resultado?</label>
            
              <input  type="submit" class="formulario__submit" value="Enviar"><br>
                
                <br>
        
    </form>
    
    <script src=javascript/form.js></script>
    
    <br><br><br><br><br><br><br><br><br><br><br><br><br>
    <footer>
    <div class="contenedor">
        <p class="copy">Analisis de Algoritmos &copy; 2022 - Santiago, Sergio, Xiomara</p>
        <div class="sociales">
            <a class="icon-facebook-squared" href="https://github.com/BelsantoUQ/P_Algoritmos"></a>
            
        
        </div>
        
        
        </div>
    
    
    </footer>
    
</body>
</html>