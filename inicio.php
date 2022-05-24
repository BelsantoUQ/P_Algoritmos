<html lang= "es">
    <head>
    <title> INICIO PRUEBAS </title>
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

    ?>
</header>
     
    
    
    <form  class="formulario" action="validar.php" method="post">
        <h1 class="formulario__titulo">Iniciar Pruebas</h1>
        <input name="loginCedula" id="loginCedula"   type="text" class="formulario__input" required="">
        <label  class="formulario__label">Cédula</label>
        
        <input name="loginName" id="loginName"   type="text" class="formulario__input" required="">
        <label  class="formulario__label">Nombre</label>

            <input name="loginEmail"  id="loginEmail" class="formulario__input" required="">
        <label  class="formulario__label">Email</label>
            
              <input  type="submit" class="formulario__submit" value="Ingresar"><br>
                
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