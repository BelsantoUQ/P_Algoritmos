<html lang= "es">
    <head>
    <title> INICIO PRUEBAS </title>
    <meta charset= "UTF-8">
    <link rel="stylesheet" href="estilosReusltados.css"> 
        <link rel="stylesheet" href="cssInicio/estilosRegistro.css">
        <link rel="stylesheet" href="cssInicio/estilos.css"> 
         
</head>

<header>
<nav>
			<ul>
				<li><a href="vistaCalculos.php">ESTADISTICAS</a></li>
				
		</nav>
    <?php
        session_start();

    ?>
</header>
<body>

     
    
    
    <form  class="formulario" action="validar.php" method="post">
        <h1 class="formulario__titulo">Iniciar Pruebas</h1>
        <input name="loginCedula" id="loginCedula" class="formulario__input" required="">
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
            <a class="" href="https://github.com/BelsantoUQ/P_Algoritmos">github</a>
            
        
        </div>
        
        
        </div>
    
    
    </footer>
    
</body>
</html>