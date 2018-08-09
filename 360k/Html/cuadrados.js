var pos=236;
var pos2=200;
document.getElementById("rb").onclick=function(){
  for(var i=0; i<pos; i++){
    document.getElementById("rb").style.left = i + "px";
    for(var x=0; x<pos2; x++){
    document.getElementById("rb").style.top = x + "px";  
    }

  }
}
