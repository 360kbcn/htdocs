var figura = [];
var resul=0;
var saldo=2000; ganas=0;
$(function(){
  $('#jugar').show();
  $('#tirar').hide();
  VerSaldo(saldo);



  $('#jugar').click(function(){
    $('#estado').html(" ");
    if (saldo<=0){
      alert('Tu saldo es 0 Se recargara');
      saldo=2000;
      ganas=0;
    }else{
      saldo=saldo -100;
    }

    jugada();

  //console.log(resul);

    if(resul===7 || resul===11){
            $('#estado').html(" ");
            HasGanado();

    }else if (resul===2 || resul=== 3 || resul===12) {
            $('#estado').html(" ");
            HasPerdido();

    }else{
      $('#jugar').hide();
      $('#tirar').show();
      $('#estado').html("Sigue Jugando");
      tirada = resul;
    }

      $('#tirar').click(function(){
            $('#estado').html(" ");
            jugada();

            if(tirada === resul){
              $('#estado').html(" ");
              HasGanado();
              $('#jugar').show();
              $('#tirar').hide();


            }else if(resul === 7){
              $('#estado').html(" ");
              HasPerdido();
              $('#jugar').show();
              $('#tirar').hide();

          }else{
            $('#estado').html("Sigue Jugando");
          }

          })


function HasGanado(){
  $('#estado').html("Has Ganado");
  saldo+=100;
  VerSaldo(saldo);
}

function HasPerdido(){
  $('#estado').html("Has Perdido");
  saldo-=100;
  VerSaldo(saldo);
}

   VerSaldo(saldo);
   if (saldo===0){
     alert('Tu saldo es 0 Se recargara');
     saldo=2000;
   }
  })

})

function jugada(){

    $('#estado').html(" ");

    var valorDado1=Math.floor(Math.random()*6)+1;
    var valorDado2=Math.floor(Math.random()*6)+1;

    $('#game1').attr('src','imgDados/Dado'+valorDado1+".png");
    $('#game2').attr('src','imgDados/Dado'+valorDado2+".png");

    resul=valorDado1+valorDado2;

    return resul;

}


function VerSaldo(saldo){
  $('#mensaje').html("Saldo:"+saldo+" €");
}
