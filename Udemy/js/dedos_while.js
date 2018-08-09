document.getElementById('btn_1').onclick = function(){
    var miNumero = document.getElementById('numero').value;
    var aciertoMaquina = false;
    var numeroIntentos = 1;
    while (aciertoMaquina == false){
      var numAletorio = Math.floor((Math.random()*10)+1);
      if (numAletorio == miNumero){
        aciertoMaquina = true;
        alert("Acertastes EL numero "+numAletorio+ " Me ha costado "+numeroIntentos+' intentos');
        }else{
          numeroIntentos ++;
        }
      }
}
