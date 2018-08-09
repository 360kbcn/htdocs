var figura = [];
var saldo=2000; ganas=0;
$(function(){
  var premio = [0,100,100,100,500,500,10000];
  VerSaldo(saldo);



  $('#jugar').click(function(){

  


    if (saldo<=0){
      alert('Tu saldo es 0 Se recargara');
      saldo=2000;
      ganas=0;
    }else{
      saldo=saldo -150;
    }




    var figura = [];
    figura[1]=Math.floor(Math.random()*6)+1;
    figura[2]=Math.floor(Math.random()*6)+1;
    figura[3]=Math.floor(Math.random()*6)+1;
    figura[1] = figura[2];




    $('#game1').attr('src','imgSlots/fruta'+figura[1]+".png");
    $('#game2').attr('src','imgSlots/fruta'+figura[2]+".png");
    $('#game3').attr('src','imgSlots/fruta'+figura[3]+".png");





   if(figura[1]===figura[2] && figura[1]===figura[3] && figura[2]===figura[3]){
     saldo+=premio[figura[2]];
     ganas+=premio[figura[2]];
// console.log(saldo)

   }

   VerSaldo(saldo);

  })

})



function VerSaldo(saldo){
  $('#mensaje').html("Saldo:"+saldo+" €"+"  Ganancia:"+ganas+" €");
}
