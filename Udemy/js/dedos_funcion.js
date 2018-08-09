function hacerintento (numeroCorrecto){
    var numAletorio = Math.floor((Math.random()*10)+1);
    if (numAletorio == numeroCorrecto){
      return true;
    }else{
      return false;
    }
}
document.getElementById('btn_1').onclick = function(){
    var miNumero = document.getElementById('numero').value;
    var aciertoMaquina = false;
    var numeroIntentos = 1;
    while (aciertoMaquina == false){

      if (hacerintento(miNumero) == true){
        aciertoMaquina = true;
        alert("Acertastes EL numero "+miNumero+ " Me ha costado "+numeroIntentos+' intentos');
        }else{
          numeroIntentos ++;
        }
      }
}
