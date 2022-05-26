
var movimientos =0;
var repetidos = 0;
var giros = 0;

var frente =true;
var atras =false;
var abajo =false;
var arriba =false;

var superado = 0;
var intentosUser = [];

let sequence = [[00, 01, 02, 03, 04, 05], 
                [10, 11, 12, 13, 14, 15], 
                [20, 21, 22, 23, 24, 25], 
                [30, 31, 32, 33, 34, 35], 
                [40, 41, 42, 43, 44, 45], 
                [50, 51, 52, 53, 54, 55]];
//console.log(sequence);
//console.log(sequence[2][2]);

let bSequence = [[true, false, false, false, false, false], 
                [false, false, false, false, false, false], 
                [false, false, false, false, false, false], 
                [false, false, false, false, false, false], 
                [false, false, false, false, false, false], 
                [false, false, false, false, false, false]];

  $('.atras').css({
    opacity: '0'                               	            
  });
 

  $('.abajo').css({
    opacity: '0'                               	            
 });

 
  $('.arriba').css({
    opacity: '0'                               	            
  });

function validarObjetivo(){
  
  bSequence = [[true, false, false, false, false, false], 
                  [false, false, false, false, false, false], 
                  [false, false, false, false, false, false], 
                  [false, false, false, false, false, false], 
                  [false, false, false, false, false, false], 
                  [false, false, false, false, false, false]];
                  
   intentosUser = [];
  if(sequence[ansI][ansJ]==sequence[i][j]){
    //Objetivo logrado
    superado =1;
  }
    $.ajax({
      method:"POST",
      url: "mainPrueba.php",
      data: {movimientos,giros,repetidos,superado}
    })
      .done(function(response ){
        $('.mostrarResultados').html(response);
      });
      
   movimientos =0;
   repetidos = 0;
   giros = 0;

  frente =true;
  atras =false;
  abajo =false;
  arriba =false;

  superado = 0;
      
    
   
}
     // ********//Para avanzar//************// */
     
     function dibujar_despacio(x) {
      if (x < intentosUser.length) {
        console.log(x);
        //papel.drawImage(tiranosaurio.imagen, 100, x)
        if(intentosUser[x]=="moverse"){
          driveAirplane();
        }
        if(intentosUser[x]=="izquierda"){
          giroIzq();
        }
        if(intentosUser[x]=="derecha"){
          giroDer();
        }
        setTimeout(() => dibujar_despacio(x+1), 1000);
      }else{
        validarObjetivo();
      }
    }     
$( ".valiadarIntento" ).click(function() {

 
  dibujar_despacio(0);
  
  });


  $( ".avanzar" ).click(function() {
    if(frente){
      if(j<7){
        intentosUser.push("moverse");
      }
    }
    if(atras){
      if(j>0){
        
    intentosUser.push("moverse");
      }
    }
  
    /* movimiento vertical*/
    if(abajo){
      if(i<5){
    intentosUser.push("moverse");
      }
    }
    if(arriba){
      if(i>0){
    intentosUser.push("moverse");
      }
    }

  

  });

  function driveAirplane(){
     /* movimiento horizontal*/
     if(frente){
      if(j<5){
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
      if(i<5){
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

  $(".turnLeft").click(function(){
    giros++;
    intentosUser.push("izquierda");
    
  });
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

  // *** /// ***Para la rotacion del objeto hacia la derecha /// *** /// /***// //***/
  $( ".turnRight" ).click(function(){
    giros++;
    
    intentosUser.push("derecha");
  });
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
//////////////////**movimiento *////////////////////////
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

//////// ****** mostrar avion ****** ///////////
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

//////// ****** ocultar avion ****** ///////////

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
