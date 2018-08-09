var cesta=[];

document.getElementById("compra").addEventListener('click', comprar);

function comprar(){
  var producto=document.getElementById('producto').value;

  if (producto.trim() !=="" && cesta.indexOf(producto)=== -1){
    cesta.push(producto);
  }

  mostrar(cesta);
  console.log(cesta);
  document.getElementById('producto').value="";

}

function tecla(event){
  console.log(event);
  if(event.keyCode===13 ||event.keyCode===43 ||event.keyCode===187) {
    comprar();
    event.preventDefault();

  }
}





function mostrar(cesta){
  var resultado=document.getElementById('cesta');
  resultado.innerHTML="";
  for (var i=0;i<cesta.length;i++){
    resultado.innerHTML+="<p>"+i+".-"+cesta[i]+"</p>"
  }
}
