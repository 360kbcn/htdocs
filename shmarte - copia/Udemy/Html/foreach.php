<?php
$meses = array ('Enero', 'Febrero','Marzo','Abril',
  'Mayo', 'Junio', 'Julio', 'Agosto',
  'Septiembre', 'Octubre', 'Noviembre','Diciembre'
);

$marc = array ('telefono' => 933983966, 'edad' => 6, 'pais' => 'Catalonia');

 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Documento</title>
   </head>
   <body>
     <h1>Datos</h1>
     <ul>
      <?php
      /*
      foreach ($meses as $value) {
        echo '<li>'.$value.'</li>';
      }*/
      foreach ($marc as $dato => $value) {
        echo '<li>'.$dato.' : '.$value.'</li>';

      }
       ?>
     </ul>

   </body>
 </html>
