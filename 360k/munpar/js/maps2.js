function initMap() {

  // Opciones del map

  var options  = {
    zoom:16,
    center:{lat:41.450756, lng:2.206758}

  }

  // Nuevo Mapa
  var map = new google.maps.Map(document.getElementById('map'), options);

  // Añadir punto de localizacion.

  var Punto = 'puntomunpar.png';

  var marker = new google.maps.Marker({
      position:{lat:41.450756, lng:2.206758},
      map:map,
      icon: Punto
  });

  var ventanaInfo = new google.maps.InfoWindow({
    /* content:'<h1>Marisol Muñoz'*/
    content:'<div class="info-window">' +
            '<h3>Marisol Muñoz Pardo</h3>' +
            '<div class="info-content">' +
            '<h4>-Despacho de Abogados-</h4>' +
            '<h4>Avd. Santa Coloma nº 2 1º-2ª</h4>'+
            '<h3>Telf 93 184 48 37</h3>'+
          /*  '<img src="images/despacho.png" height="160px" width="160px">'+*/
            '<a href="https://www.google.es/maps/place/Marisol+Mu%C3%B1oz+Advocada/@41.4506367,2.2069526,16z/data=!4m5!3m4!1s0x0:0x241c37c46cb0d9bb!8m2!3d41.4505352!4d2.2067566"><img src="images/maps.jpg" height="75px" width="75px"></a>'+
            '</div>' +
            '</div>'

  });

  marker.addListener('click', function(){
    ventanaInfo.open(map, marker);
  });

}
