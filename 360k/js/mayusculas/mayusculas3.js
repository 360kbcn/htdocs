function tipoHipster(cadena){
  var vocales="";
  var consonantes="";
  for (i=0;i<cadena.length;i++){
    if(esVocal(cadena.charAt(i))){
      vocales+=cadena.charAt(i).toUpperCase();
    }else{
      vocales+=cadena.charAt(i).toLowerCase();
    }
  }
  return vocales
}

function esVocal(letra){
  var vocales="aeiouAEIOU";
  if (vocales.indexOf(letra.toUpperCase())===-1){
    return false;
  }else{
    return true;
  }

}
