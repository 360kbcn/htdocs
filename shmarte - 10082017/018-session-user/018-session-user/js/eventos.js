document.querySelector(".alerta button").addEventListener("click", cerrar);

function cerrar(){
  this.parentNode.style="display:none;";
}
