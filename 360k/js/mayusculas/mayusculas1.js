function tipoOracion(cadena){
  var primera=cadena.charAt(0);
  var resto=cadena.slice(1);
  var res=primera.toUpperCase()+resto.toLowerCase();
  return res;
}
