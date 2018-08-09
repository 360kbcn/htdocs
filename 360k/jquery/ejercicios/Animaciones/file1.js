$('#a1').click(function(){
$('#lot').hide(1500);
});

$('#a2').click(function(){
$('#lot').show("slow");
});

//Ocultar / Mostrar bloque
$("#a3").click(function() {
$("#lot").toggle(1500);
},function(){
$("#lot").toggle(1500);
});

//Cambiar tamaÃ±o
$("#a4").click(function() {
$("#lot").animate({fontSize:'2.4em',width:400,padding:24}, 2500);
});

//Ocultar con FadeOut
$("#a5").click(function() {
$("#lot").fadeToggle(3000);
});

//Mostrar con FadeIn
$("#a6").click(function() {
$("#lot").fadeIn(3000);
});

//Mover
$("#a7").click(function(){

		$("#lot").animate({opacity: "0.1", left: "+=400",fontSize:'1em',width: "200"}, 1200)
		.animate({opacity: "0.4", top: "+=160", height: "20", width: "80",fontSize:'0.5em'}, "slow")
		.animate({opacity: "1", left: "0", width: "260"}, "slow")
		.animate({top: "0",width: "260",fontSize:'1.2em'}, "fast")
		.slideUp()
		.slideDown(1800)
		return false;

	});


  //Cambiar estilo CSS
  $("#a8").click(function() {
  $("#lot").css({'border':'4px solid #b7e5ff','color':'#cc3333','font-weight':'bold','background-color':'#ffffff'});
  });

  //Toca para ocultarme
$("#btn_2").click(function() {
$(this).hide().delay(1500).show(1500);
});

//Fondo amarillo
$(".amarillo").hover(
	function() { $(this).addClass("hover"); },
	function() { $(this).removeClass("hover"); }
);

//Contador de caracteres
$('textarea').keyup(updateCount);
$('textarea').keydown(updateCount);
function updateCount() {
    var cs = $(this).val().length;
    $('#caracteres').text(cs);
}
