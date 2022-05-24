
var movimientos =0;
var repetidos = 0;
var giros = 0;
var i =0;
var j =0;
var frente =true;
var atras =false;
var abajo =false;
var arriba =false;
var ansI=4; 
var ansJ= 3;
var ans= 43;

let sequence = [[00, 01, 02, 03, 04, 05, 06, 07], 
                [10, 11, 12, 13, 14, 15, 16, 17], 
                [20, 21, 22, 23, 24, 25, 26, 27], 
                [30, 31, 32, 33, 34, 35, 36, 37], 
                [40, 41, 42, 43, 44, 45, 46, 47], 
                [50, 51, 52, 53, 54, 55, 56, 57]];
//console.log(sequence);
//console.log(sequence[2][2]);

let bSequence = [[true, false, false, false, false, false, false, false], 
                [false, false, false, false, false, false, false, false], 
                [false, false, false, false, false, false, false, false], 
                [false, false, false, false, false, false, false, false], 
                [false, false, false, false, false, false, false, false], 
                [false, false, false, false, false, false, false, false]];

  $('.atras').css({
    opacity: '0'                               	            
  });
 

  $('.abajo').css({
    opacity: '0'                               	            
 });

 
  $('.arriba').css({
    opacity: '0'                               	            
  });


     // ********//Para avanzar//************// */
$( ".avanzar" ).click(function() {
  
  /* movimiento horizontal*/
  if(frente){
    if(j<7){
    //Adelantar
      $( ".block" ).animate({ "left": "+=150px" }, "slow" );
      j++;
      movimientos++;
    }
  }
  if(atras){
    if(j>0){
    //Atrasar
      $( ".block" ).animate({ "left": "-=150px" }, "slow" );
      j--;
      movimientos++;
    }
  }

  /* movimiento vertical*/
  if(abajo){
    if(i<5){
    //Descender
      $( ".block" ).animate({ "top": "+=150px" }, "slow" );
      i++;
      movimientos++;
    }
  }
  if(arriba){
    if(i>0){
    //Ascender 
      $( ".block" ).animate({ "top": "-=150px" }, "slow" );
      i--;
      movimientos++;
    }
  }
  if(bSequence[i][j]){
    repetidos++;
  }else{
    bSequence[i][j]=true;
  }
  if(sequence[ansI][ansJ]==sequence[i][j]){
    //Objetivo logrado
    setTimeout(() => { 
      alert('Prueba finalizada. '+ 
      '\n Movimientos: '+movimientos 
      + '\n Giros: '+giros 
      + '\n Cuadricula repetidas: '+repetidos 
    )}, 600);
    $.ajax({
      method:"POST",
      url: "mainPrueba1.php",
      data: { movimientos,giros,repetidos}
    })
      .done(function(response ){
        $('.mostrarResultados').html(response);
      });
      
    
  } 
  });


   //*****Para la rotacion del objeto hacia la izquierda*/

  $(".turnLeft").click(function(){
    giros++;
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

  // *** /// ***Para la rotacion del objeto hacia la derecha /// *** /// /***// //***/
  $( ".turnRight" ).click(function(){
    giros++;
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


//////// ****** mostrar avion ****** ///////////
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

//////// ****** ocultar avion ****** ///////////

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