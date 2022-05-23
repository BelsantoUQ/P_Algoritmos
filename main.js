var movimientos =0;
var repetidos = 0;
var giros = 0;
var inicioI =0;
var inicioJ =0;
var frente =true;
var atras =false;
var abajo =false;
var arriba =false;
var ansI=4; 
var ansJ= 3;
var ans= 43;

let sequence = [[00, 01, 02, 03], 
                [10, 11, 12, 13], 
                [20, 21, 22, 23], 
                [30, 31, 32, 33], 
                [40, 41, 42, 43], 
                [50, 51, 52, 53]];
//console.log(sequence);
//console.log(sequence[2][2]);

let bSequence = [[true, false, false, false], 
                [false, false, false, false], 
                [false, false, false, false], 
                [false, false, false, false], 
                [false, false, false, false], 
                [false, false, false, false]];

  $('.atras').css({
    opacity: '0'                               	            
  });
 

  $('.abajo').css({
    opacity: '0'                               	            
 });

 
  $('.arriba').css({
    opacity: '0'                               	            
  });

//////// ******  ****** ///////////
function mostrarFrente() { 
  $('.frente').animate({
    opacity: '1'                               	            
  });
 }

function mostrarAtras() { 
  $('.atras').animate({
    opacity: '1'                               	            
  });
 }

 function mostrarAbajo() { 
  $('.abajo').animate({
    opacity: '1'                               	            
 });
}

function mostrarArriba() {  
  $('.arriba').animate({
    opacity: '1'                               	            
  });
}

//////// ******  ****** ///////////

function opacarFrente() { 
  $('.frente').animate({
    opacity: '0'                               	            
  });
 }

function opacarAtras() { 
  $('.atras').animate({
    opacity: '0'                               	            
  });
 }

 function opacarAbajo() { 
  $('.abajo').animate({
    opacity: '0'                               	            
 });
}

function opacarArriba() {  
  $('.arriba').animate({
    opacity: '0'                               	            
  });
}

$( ".avanzar" ).click(function() {
  if (false) {
    //derecha
    $( ".block" ).animate({ "left": "+=50px" }, "slow" );
    
    //Ascender 
    $( ".block" ).animate({ "top": "-=50px" }, "slow" );
   
    //Izquierda
    $( ".block" ).animate({ "left": "-=50px" }, "slow" );
  
    //Descender
    $( ".block" ).animate({ "top": "+=50px" }, "slow" );
  } else {
    
  }
    
  });
   
  $(".turnLeft").click(function(){
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
  });
  
  $( ".turnRight" ).click(function(){
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
  });