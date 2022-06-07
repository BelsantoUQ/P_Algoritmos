
var movimientos =0;
var repetidos = 0;
var giros = 0;
var frente =true;
var atras =false;
var abajo =false;
var arriba =false;
var userTry="";
var superado = 0;
var intentosUser = [];
var iAux = i;
var jAux = j;

let sequence = [[00, 01, 02, 03, 04, 05, 06, 07, 08], 
                [10, 11, 12, 13, 14, 15, 16, 17, 18], 
                [20, 21, 22, 23, 24, 25, 26, 27, 28], 
                [30, 31, 32, 33, 34, 35, 36, 37, 38], 
                [40, 41, 42, 43, 44, 45, 46, 47, 48], 
                [50, 51, 52, 53, 54, 55, 56, 57, 58],
                [60, 61, 62, 63, 64, 65, 66, 67, 68],
                [70, 71, 72, 73, 74, 75, 76, 77, 78]];

let bSequence = [[true, false, false, false, false, false, false, false, false], 
                [false, false, false, false, false, false, false, false, false], 
                [false, false, false, false, false, false, false, false, false], 
                [false, false, false, false, false, false, false, false, false], 
                [false, false, false, false, false, false, false, false, false], 
                [false, false, false, false, false, false, false, false, false],
                [false, false, false, false, false, false, false, false, false],
                [false, false, false, false, false, false, false, false, false]];

                /**Ocultar los aviones */
  $('.atras').css({
    opacity: '0'                               	            
  });
  $('.abajo').css({
    opacity: '0'                               	            
 });
  $('.arriba').css({
    opacity: '0'                               	            
  });

/**Muestra el movimiento */
function mostrarMovimiento(){
  userTry="";
  for (let index = 0; index < intentosUser.length; index++) {
    
    userTry=userTry+"-"+intentosUser[index];
  }
  $('.userTry').html(userTry);
}
  // **//Funcion recurciva avanzar 1 movimiento a la vez con intervalos de 1 seg//***// */
  function dibujar_despacio(x) {
      if (x < intentosUser.length) {
        console.log(x);
        if(intentosUser[x]=="Avanza"){
          driveAirplane();
        }
        if(intentosUser[x]=="Giro izquierda"){
          giroIzq();
        }
        if(intentosUser[x]=="Giro derecha"){
          giroDer();
        }
        setTimeout(() => dibujar_despacio(x+1), 1000);
      }else{
        validarObjetivo();
      }
  }  

  function validarObjetivo(){
    //Objetivo logrado
   if(sequence[ansI][ansJ]==sequence[i][j]){
     superado =1;
   }
   //llamo un archivo php donde guardo el resultado y devuelvo una linea de texto
     $.ajax({
       method:"POST",
       url: "mainPrueba.php",
       data: {movimientos,giros,repetidos,superado}
     })
       .done(function(response ){
         $('.mostrarResultados').html(response);
       });
     //Reinicio la variables
     
     bSequence = [[true, false, false, false, false, false, false, false, false], 
                [false, false, false, false, false, false, false, false, false], 
                [false, false, false, false, false, false, false, false, false], 
                [false, false, false, false, false, false, false, false, false], 
                [false, false, false, false, false, false, false, false, false], 
                [false, false, false, false, false, false, false, false, false]
                [false, false, false, false, false, false, false, false, false]
                [false, false, false, false, false, false, false, false, false]];

   intentosUser = [];
   movimientos =0;
   repetidos = 0;
   giros = 0;
   frente =true;
   atras =false;
   abajo =false;
   arriba =false;
   superado = 0;
   iAux= 0;
   jAux=0;
       
 }

  $( ".valiadarIntento" ).click(function() {

 
    frente =true;
    atras =false;
    abajo =false;
    arriba =false;
    dibujar_despacio(0);
  
  });

  $( ".avanzar" ).click(function() {
    /* movimiento Horizontal*/
    if(frente){
      if(jAux<9){
        intentosUser.push("Avanza");
        jAux++;
        mostrarMovimiento();
      }
      
    }

    if(atras){
      if(jAux>0){
        
    intentosUser.push("Avanza");
    jAux--;
    mostrarMovimiento();
      }
    }
    /* movimiento vertical*/
    if(abajo){
      if(iAux<8){
        iAux++;
    intentosUser.push("Avanza");
    mostrarMovimiento();
      }
    }

    if(arriba){
      if(iAux>0){
        
        iAux--;
        intentosUser.push("Avanza");
        mostrarMovimiento();
      }
    }
    
  });

  $(".turnLeft").click(function(){
    giros++;
    intentosUser.push("Giro izquierda");
    mostrarMovimiento();
    clickGiroIzq();
  });

  $( ".turnRight" ).click(function(){
    giros++;
    
    intentosUser.push("Giro derecha");
    mostrarMovimiento();
    clickGiroDer();
  });
  ///***********Mueve el avion */
  function driveAirplane(){
     /* movimiento horizontal*/
     if(frente){
      if(j<9){
      //Adelantar
      moverDerecha();
        j++;
        movimientos++;
      }
    }
    if(atras){
      if(j>0){
      //Atrasar
      moverIzquierda();
        j--;
        movimientos++;
      }
    }
  
    /* movimiento vertical*/
    if(abajo){
      if(i<8){
      //Descender
      moverAbajo();
        i++;
        movimientos++;
      }
    }
    if(arriba){
      if(i>0){
      //Ascender 
        moverArriba();
        i--;
        movimientos++;
      }
    }

 
  if(bSequence[i][j]){
    repetidos++;
  }else{
    bSequence[i][j]=true;
  }
 
  }

   //*****Para la rotacion del objeto hacia la izquierda*/
  function giroIzq(){
    if(frente){
      opacarFrente();
      mostrarArriba();
      frente=false;
      arriba=true;
    }else
    if(atras){
      opacarAtras();
      mostrarAbajo();
      abajo=true;
      atras=false;

    }else
    if(abajo){
      opacarAbajo();
      mostrarFrente();
      abajo=false;
      frente=true;
    }else
    if(arriba){
      opacarArriba();
      mostrarAtras();
      arriba=false;
      atras=true;
    }
  }
  function clickGiroIzq(){
    if(frente){
      frente=false;
      arriba=true;
    }else
    if(atras){
      abajo=true;
      atras=false;

    }else
    if(abajo){
      abajo=false;
      frente=true;
    }else
    if(arriba){
      arriba=false;
      atras=true;
    }
  }
   // *** /// ***Para la rotacion del objeto hacia la derecha /// *** ///
  function clickGiroDer(){
    if(frente){
      frente=false;
      abajo=true;
      
    }else
    if(atras){
      atras=false;
      arriba=true;
    }else
    if(abajo){
      abajo=false;
      atras=true;
    }else
    if(arriba){
      arriba=false;
      frente=true;
    }
  }
  function giroDer(){
    if(frente){
      opacarFrente();
      mostrarAbajo();
      frente=false;
      abajo=true;
      
    }else
    if(atras){
      opacarAtras();
      mostrarArriba();
      atras=false;
      arriba=true;
    }else
    if(abajo){
      opacarAbajo();
      mostrarAtras();
      abajo=false;
      atras=true;
    }else
    if(arriba){
      opacarArriba();
      mostrarFrente();
      arriba=false;
      frente=true;
    }
  }

  ///////////////**movimiento *////////////////////////
  function moverDerecha(){
    
    $( ".block" ).animate({ "left": "+=250px" }, "slow" );
  }
  function moverIzquierda(){
    
    $( ".block" ).animate({ "left": "-=250px" }, "slow" );
  }
  function moverArriba(){
    
    $( ".block" ).animate({ "top": "-=250px" }, "slow" );
  }
  function moverAbajo(){
    
    $( ".block" ).animate({ "top": "+=250px" }, "slow" );
  }

//////// ****** mostrar avion (son 4 aviones pero solo se debe mostrar 1)****** ///////////
function mostrarFrente() { 
  $('.frente').animate({
    opacity: '1'                               	            
  });
 }

function mostrarAtras() { 
  $('.atras').animate({
    opacity: '1'                               	            
  }, "slow" );
 }

 function mostrarAbajo() { 
  $('.abajo').animate({
    opacity: '1'                               	            
 }, "slow" );
}

function mostrarArriba() {  
  $('.arriba').animate({
    opacity: '1'                               	            
  }, "slow" );
}

//////// ****** ocultar aviones (son 4 aviones pero solo se debe mostrar 1) ****** ///////////
function opacarFrente() { 
  $('.block .frente').animate({
    opacity: '0'                               	            
  }, "slow" );
 }

function opacarAtras() { 
  $('.block .atras').animate({
    opacity: '0'                               	            
  }, "slow" );
 }

 function opacarAbajo() { 
  $('.block .abajo').animate({
    opacity: '0'                               	            
 }, "slow" );
}

function opacarArriba() {  
  $('.block .arriba').animate({
    opacity: '0'                               	            
  }, "slow" );
}
