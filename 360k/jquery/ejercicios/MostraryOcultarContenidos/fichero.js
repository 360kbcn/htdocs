jQuery(function () {
  jQuery(".leerMas").bind("click", function () {
    jQuery(this).text(jQuery(this).text() == "Leer más" ? "Ocultar" : "Leer más");
    jQuery(this).prev().slideToggle();
    /* slideToggle() Muestra u Oculta un elemento con efecto
    de desplazamiento
    */
  });
});
