<html>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Esteadisticas del Juego</title>
        
        <link rel="stylesheet" href="estilosReusltados.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">


        
    </head>
    <?php 
    include 'calculos.php';
    ?>

    <header>
 
		<nav>
			<ul>
				<li><a href="inicio.php">Inicio</a></li>
				
		</nav>
	</header>
    <body background="recursos/Cloud-5s-1084px.png">
        <main>
            <div class="card">
                <ul class="coeficiente">
                    <li><h2>Prueba: 1</h2></li>
                    <li><h3>Coeficiente de Correlacion: <?php echo $coeficienteCorrel ?></h3></li>
                </ul>
                <ul>
                    <li><h2>Prueba: 1</h2></li>
                    <li><h3>Promedio: <?php echo $promedio1 ?>%</h3></li>
                    <li><h3>Correctas: <?php echo $pregCorrecta1 ?></h3></li>
                    <li><h3>Incorrectas: <?php echo $pregIncorrecta1 ?></h3></li>
                 </ul>

                <ul>
                    <li><h2>Prueba 2</h2></li>
                    <li><h3>Promedio: <?php echo $promedio2 ?>%</h3></li>
                    <li><h3>Correctas: <?php echo $pregCorrecta2 ?></h3></li>
                    <li><h3>Incorrectas: <?php echo $pregIncorrecta2 ?></h3></li>
                </ul>
                <ul>
                    <li><h2>Prueba 3</h2></li>
                    <li><h3>Promedio: <?php echo $promedio3 ?>%</h3></li>
                    <li><h3>Correctas: <?php echo $pregCorrecta3 ?></h3></li>
                    <li><h3>Incorrectas: <?php echo $pregIncorrecta3 ?></h3></li>
                </ul>
                <ul>
                    <li><h2>Prueba 4</h2></li>
                    <li><h3>Promedio: <?php echo $promedio4 ?>%</h3></li>
                    <li><h3>Correctas: <?php echo $pregCorrecta4 ?></h3></li>
                    <li><h3>Incorrectas: <?php echo $pregIncorrecta4 ?></h3></li>
                </ul>
                <ul>
                    <li><h2>Prueba 5</h2></li>
                    <li><h3>Promedio: <?php echo $promedio5 ?>%</h3></li>
                    <li><h3>Correctas: <?php echo $pregCorrecta5 ?></h3></li>
                    <li><h3>Incorrectas: <?php echo $pregIncorrecta5 ?></h3></li>
                </ul>

                <ul class="questions">
                    <li><h2>¿Recomendaria la prueba?</h2></li>
                    <li><h3>Promedio: <?php echo $promedioQ1 ?></h3></li>
                </ul>
                <ul class="questions">
                    <li><h2>¿Que tan dificil fue para usted?</h2></li>
                    <li><h3>Promedio: <?php echo $promedioQ2 ?></h3></li>
                </ul>
                <ul class="questions">
                    <li><h2>¿Esta feliz con el resultado?</h2></li>
                    <li><h3>Promedio: <?php echo $promedioQ3 ?></h3></li>
                </ul>
            </div>

            <table class="table table-dark">
                <thead>
                  <tr>
                    <th scope="col"># Posiicon</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Nota</th>
                  </tr>
                </thead>
                <tbody>
                    
                    <?php
                    $i=0;  
                    while($row=mysqli_fetch_assoc($listadoUsers)){
                                $i=$i+1;
                                $nombre=$row["nombre"];
                                $calificacion=$row["calificacion"];
                                $email=$row["email"];
                           
                    
                  echo '<tr>
                    <th scope="row"> '.$i.'</th>
                    <td> '.$nombre.' </td>
                    <td>'.$email.'</td>
                    <td> '.$calificacion.' </td>
                  </tr>';
                } 
                  ?>
                </tbody>
              </table>
            
        </main>
    </body>
</html>