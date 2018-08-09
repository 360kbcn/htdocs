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
  $Mypdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
  return $Mypdo;
};

$variable1['view']=function(){
  return new \Slim\Views\PhpRenderer('views');
};


// Para la Pagina de inicio falta definir $Myapp->get("", "\BDmms:home")
$Myapp->get("/api", "\BDmms:guide");
$Myapp->get("/api/movie/{id}", "\BDmms:movie");
$Myapp->get("/api/movie", "\BDmms:moviefull");



$Myapp->run();
?>

<?php
//ob_start();
 ?>
