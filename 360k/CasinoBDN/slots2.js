var figura = [];
$(function(){
  var saldo=2000; ganas=0;
  var premio = [0,100,100,100,500,500,10000];
  VerSaldo(saldo);



  $('#jugar').click(function(){
    saldo=saldo -150;
    //var pos =[];
    /*pos.push(Math.floor(Math.random()*9));
    pos.push(Math.floor(Math.random()*9));
    pos.push(Math.floor(Math.random()*9));
    // pos[1] = pos[0];
*/

   setTimeout(aletorio(), 2000);

   if(figura[1]===figura[2] && figura[1]===figura[3] && figura[2]===figura[3]){
     saldo+=premio[figura[2]];
     ganas+=premio[figura[2]];
     console.log(" Salio la Figura "+figura[2]);
     console.log(" Has Ganado "+premio[figura[2]]);
   }

   VerSaldo(saldo);
   if (saldo===0){
     // Boton Saldo 0 pulsa para recargar
     saldo=2000;
   }
  })

})

function aletorio(){


      var figura = [];
      figura[1]=Math.floor(Math.random()*6)+1;
      figura[2]=Math.floor(Math.random()*6)+1;
      figura[3]=Math.floor(Math.random()*6)+1;
      figura[1] = figura[2];

      //console.log(saldo);


      $('#game1').attr('src','imgSlots/fruta'+figura[1]+".png");
      $('#game2').attr('src','imgSlots/fruta'+figura[2]+".png");
      $('#game3').attr('src','imgSlots/fruta'+figura[3]+".png");

  return
}

function VerSaldo(saldo){
  $('#mensaje').html("Saldo:"+saldo+" €"+"  Ganancia:"+ganas+" €");
}
