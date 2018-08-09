<?php
  session_start();
  if(isset($_SESSION['user'])) ;
  if(isset($_POST['user'])){
    $us = $_POST['user'];
    $pw = isset($_POST['password'])?$_POST['password']:"";
    require_once("users.php");
    $validado = validarUser($us, $pw);
    if($validado){
      $_SESSION['user'] = $us;
      header("Location: privada.php");
    }
  }
?>
<?php
require_once "vendor/autoload.php";
require_once "BDcartelera.php";
require_once "config.php";


$configuration = [
    'settings' => [
        'displayErrorDetails' => true,
    ],
];
$c = new \Slim\Container($configuration);

$app = new Slim\App($c);

$c = $app->getContainer();

$c['bd']=function(){

  global $bd_url;
  global $bd_name;
  global $bd_user;
  global $bd_password;

  $pdo = new PDO("mysql:host=$bd_url; dbname=$bd_name", $bd_user, $bd_password);
  return $pdo;
};


$c['vista']=function(){

  return new \Slim\Views\PhpRenderer('vista');

};

/***********************************************/
/***********************************************/
/********************URL'S**********************/
/***********************************************/
/***********************************************/

/*home*/

$app->get("/", "\BDcartelera:home");

/*Categoria*/

$app->get("/categoria/{id}", "\BDcartelera:categoria");

/*Articulo*/

$app->get("/articulo/{id}", "\BDcartelera:articulo");


/*JSON*/
/*Documentacion*/
$app->get("/api/", "\BDcartelera:apidocumentacion");

/*Articulo*/
$app->get("/api/articulos", "\BDcartelera:jsarticulos");

/*Articulo ID*/
$app->get("/api/articulos/{id}", "\BDcartelera:jsarticuloid");

/*Categoria Genero*/
$app->get("/api/genero/{id}", "\BDcartelera:jsgenero");
/*FIN JSON*/







$app-> run();

?>
