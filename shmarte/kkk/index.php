<?php
require_once "vendor/autoload.php";
require_once "controler/load.php";
require_once "model/load.php";
// require_once "config.php";
require_once "config-install.php";

$configuration = [
    'settings' => [
        'displayErrorDetails' => true,
    ],
];

$c = new \Slim\Container($configuration);

$app = new Slim\App($c);

//Dependencias
$c = $app->getContainer();
$c['view'] = function(){
    global $c;
    $renderer = new Slim\Views\PhpRenderer('view');
    $renderer->addAttribute("BASE_URL", $c->get('request')->getUri()->getBasePath());
    return $renderer;
};

$c['data'] = function(){
    //global $db;
    $db = "";
    $dataAccess = new DataAccess2($db);
    return $dataAccess;
};

$app->add(new \Slim\Middleware\HttpBasicAuthentication([
    "path" => "/admin",
    "realm" => "Protected",
    "users" => [
        "admin" => "admin"
    ]
]));

//middleware estadístiques
require_once "src/middleware.php";
$urlmiddleware = new StatisticsUrlMiddleware();

//$app->add(new \Slim\Middleware\SafeURLMiddleware());

//URLs
$app->get("/", "\WebControler:cargarHome")->add($urlmiddleware);
$app->get("/temas/{id}","\WebControler:temas")->add($urlmiddleware);
$app->get("/admin/crear","\WebControler:crear");
$app->post("/admin/crear","\WebControler:add");
$app->get("/estadisticas","\WebControler:estadisticas");

$app->run();
?>
