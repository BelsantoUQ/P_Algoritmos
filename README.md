# P_Algoritmos
Este repositorio es creado con la finalidad de almacenar y desarrollar el proyecto final para la asignatura "análisis de algoritmos" de la universidad del Quindio
El proyecto consiste en hacer 5 pruebas de direccionamiento donde la persona debe lograr un recorrido hasta un objetivo previamente determinado en un mapa de tipo matriz,
es decir una cuadricula donde el recorrido en este caso se dará en i para movimientos verticales y j para horizontales.
Primero creamos el modelo del proyecto usando un sistema de gestión de bases de datos MySQL, el servidor web Apache y los intérpretes para lenguajes
de script PHP llamado XAMPP. Este nos ayudara a tener un servidor local donde almacenar los datos ademas el modelo que creamos consiste en dos Entidades fuertes, un
Usuario y un Test los cuales tienen una relacion de muchos a muchos por lo que creamos una tabla intermedia llamada detalletest. Luego pasamos al front del proyecto.
Para esto usamos html ya que el tiempo de entrega era corto, creamos un modelo con un avion y configuramos las etiquetas html (usamos div's en su mayoria) con clases css
donde especificamos el lugar del objeto (Elegimos un avion como modelo) junto con su posicion, el movimiento del objeto puede ser hacia arriba, hacia abajo, hacia
adelante y hacia atras, para crear algo mas de dificultad y ya que era una opcion planteada en el proyecto, decidimos crear dos opciones de giro y una opcion vara
avanzar dependiendo de a donde este apuntando el frente del avion. Una vez lograda la mayor parte grafica, tomamos la decision de controlar los botonos con javascript
ponemos un boto para moverse, este movimiento sucede solo cuando presiona avanzar, dos son de giro y uno es para validar el intento. El boton de avanzar hace que el 
avion se mueva 250px en la direccion en la que esta apuntando y este solo se verá cuando el usuario presione el boton de validar(usamos clases css para saber si presiona)
de esta manera creamos tambien variables que guardan el movimiento, giro, asillas repetidas, si la prueba fue superada o no. Debido a que el objeto no debe moverse 
sino hasta que la persona valide el recorrido que cree que es el indicado para llegar al objetivo pre definido, creamos un arreglo que guarda los movimientos y luego
los reproduce en intervalos de 1 segundo con ayuda de una funcion recursiva. Ademas mostramos los movimientos que la persona va eligiendo para que se pueda orientar.
Para almacenar los datos obtenidos de cada prueba creamos un metodo post desde javascript que se ejecuta al moemento que el usuario valida su intento, el archivo php
guarda la informacion almacenada y devuelve un url que le permitira al usuario seguir a la siguiente prueba o en el caso de ser la ultima lo enviara al cuestionario
de satisfaccion donde habrán 3 preguntas que se podrán calificar de 1 a 5 una vez hecho esto el programa volverá al inicio.
