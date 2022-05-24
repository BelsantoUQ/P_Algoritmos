<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analisis de Algoritmos</title>
    
    <link rel="stylesheet" href="estilos.css">
    
</head>
<body background="recursos/miFondo.png">


    <header>
          
            
            
    <?php
        session_start();
        $name = "USUARIO";
        $cedula = "";

        if (isset($_SESSION['LoginIniciado'])) {
            
            if(($_SESSION['pruebaActual'])<=1){
             
             $name = $_SESSION ["nombre"];
            $email = $_SESSION['email'];
            $cedula = $_SESSION['cedula'];
        
            $_SESSION ["pruebaActual"] = '1';
            
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

    <main>
        <div>
            <div class="controles">
            <div class="menu_bar">
            <a class="avanzar">Avanzar</a>
            </div>
            
            <div class="menu_bar">
            <a class="turnLeft">Giro <img rel="icon" src="recursos/girar-a-la-izquierda.png"></a>
            </div>
            
            <div class="menu_bar">
            <a class="turnRight">Giro <img rel="icon" src="recursos/actualizar.png"></a>
            </div>
            </div>
            <h1>Alcanza la posicion [4][3]  </h1>
            <br><br><br>
            <div class="block">
                <div class="frente"><img src="recursos/emirates.gif"></div>
                <div class="arriba"><img src="recursos/emirates3.gif"></div>
                <div class="abajo"><img src="recursos/emirates2.gif"></div>
                <div class="atras"><img src="recursos/emirates (1).gif"></div>
                
            </div>
            
        </div>
        
    </main>

    <footer>

    </footer>
    
	<script src="https://code.jquery.com/jquery-latest.js"></script>
    <script src="mainPrueba1.js"></script>
    <div >
        <h1 class="mostrarResultados"></h1>
    </div>
</body>
</html>