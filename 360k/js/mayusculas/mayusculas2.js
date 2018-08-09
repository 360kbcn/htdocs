function dividir(cadena){
  var array = cadena.split(" ");
  for (i=0;i<array.length;i++){
    array[i]=tipoOracion(array[i]);
  }
  return array.join(" ");
}

function tipoOracion(cadena){
  var primera=cadena.charAt(0);
  var resto=cadena.slice(1);
  var res=primera.toUpperCase()+resto.toLowerCase();
  return res;
}
