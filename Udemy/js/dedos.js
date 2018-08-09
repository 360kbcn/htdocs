document.getElementById('btn_1').onclick = function(){
  var aleatorio = Math.floor((Math.random()*5)+1);
  var numeroIntroducido = document.getElementById("numero").value;
  if (numeroIntroducido==aleatorio){
    alert('Has Acertado el numero');
  }else{
    alert('Has Fallado sigue Intentandolo el numero era '+aleatorio);
  }
}
