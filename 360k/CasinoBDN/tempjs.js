$(function() {
  var saldo=100;
  var premio = [2,3,4,5,6,7,8,90,100];

  ponSaldo(saldo);
  rellenaTabla();

  $('#jugar').click(function(){
    // Restar uno al saldo
    saldo--;
    // Obtener tres numeros aleatorios
    var pos =[];
    pos.push(Math.floor(Math.random()*9));
    pos.push(Math.floor(Math.random()*9));
    pos.push(Math.floor(Math.random()*9));
    pos[1] = pos[0];

    // Poner las imagenes correpondientes.
    $('#fruta1').attr('src','img/fruta'+pos[0]+".png");
    $('#fruta2').attr('src','img/fruta'+pos[0]+".png");
    $('#fruta3').attr('src','img/fruta'+pos[0]+".png");

    //Comprobar si hay premio y actualizar ponSaldo

    if (pos[0]===pos[1] && pos[1] === pos[2])
    //poner saldo
    ponSaldo(saldo);
  })
})
