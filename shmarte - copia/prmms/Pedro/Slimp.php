<?php
require 'vendor/autoload.php';
require 'mms_clase.php'; // requerimos las clase definida bdsakila donde iran las consultas

$configuration = [
    'settings' => [
        'displayErrorDetails' => true,
    ],
];
$c = new \Slim\Container($configuration);

$Myapp = new Slim\App($c);

$variable1 = $Myapp->getContainer();
$variable1['bd'] = function(){
  // Conexion para la BBDD mms
  $Mypdo = new PDO("mysql:host=localhost;dbname=mms","root");
  return $Mypdo;
};

$variable1['view']=function(){
  return new \Slim\Views\PhpRenderer('view');
};

// Solo Ejemplo
$Myapp->get("/", ":listadoPeliculas");
/*Aqui van las diferentes url para las consultas
La primera se la visualizacion del listado de todas las peliculas
la segunda seran los datos de la pelicula seleccionada de la lista

$Myapp->get("url", "Clase:consulta")
Ejemplo url"/" Seria la pagina index.php, "Clase" definida en bdsakila
                                          y los parametros de las
                                          consultas para SQL
*/
$Myapp->run();
?>
