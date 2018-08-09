function buscarLaLarga(cadena){
  var palabras = cadena.split(/ +/);
  var longest = palabras[0];
  palabras.map((word) =>{
    if (word.length > longest.length){
      longest=word;
    }
  });
  return longest;
}

function repetidos(cadena){
  cadena=cadena.trim();
  var res = cadena.charAt(0);
  for (var i=1;i<cadena.length;i++){
    if(!(cadena.charAt(i)=== " " && cadena.charAt(i -1) === " ")){
      res +=cadena.charAt(i);
    }
  }
  return res;
}
