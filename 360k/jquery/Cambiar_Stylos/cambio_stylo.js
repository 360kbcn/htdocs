$("div").click(function(){
  /*
  $("#circulo").css("background-color","red");  //Cambia los Valores del css
  $("#circulo").css("width","300px");
  $("#circulo").css("height","300px");
  alert($("body").css("width"));*/ // Toma los valores de css y los muestra por pantalla
   // alert("Hicistes click sobre "+$(this).attr("id")); Nos muestra por pantalla el tributo del div
   // $(this).hide(); igual que display.none.
   $(this).fadeOut("slow"); // fadeOut hace que se desvanezcan los objetos.
})
  var tratarTexto = true;
$("#btn_1").click(function(){

  if (tratarTexto == true)
    {
    $("#parrafo").fadeOut(function(){
      tratarTexto = false;
    });
  }else if (tratarTexto == false) {
    $("#parrafo").fadeIn(function(){
      tratarTexto = true;
  });
  }
  /*
  if ($("#parrafo").css("display")=="none"){
      $("#parrafo").fadeIn("slow");
  }else{
      $("#parrafo").fadeOut("slow");
  }
*/
});
