function eliminarVocales(cadena){
  var resul="";
  for(var i =0;i<cadena.length;i++){
    if(cadena.charAt(i)!='a'
    && cadena.charAt(i)!='e'
    && cadena.charAt(i)!='i'
    && cadena.charAt(i)!='o'
    && cadena.charAt(i)!='u'){
      resul+=cadena.charAt(i);
    }
  }
  return resul.replace(/[ ]/ig, '');
}

function eliminarVocales2(cadena){
  resul="";
  resul=cadena.replace(/[aeiouAEIOU]/ig, '');
  return resul.replace(/[ ]/ig, '');
}

function eliminarSpacios(cadena){
  resul="";
  return resul=cadena.replace(/[ ]/ig, '');
}
