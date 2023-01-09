<?php
// Requires
require __DIR__ . "/../vendor/autoload.php";
require __DIR__ . "/../app/Controllers/MainController.php";
require __DIR__ . "/../app/utils/Database.php";
require __DIR__ . "/../app/Models/Pokemon.php";
require __DIR__ . "/../app/Models/Type.php";

// Initialisation Altorouter
$router = new AltoRouter();
$router->setBasePath($_SERVER['BASE_URI']);
// var_dump($router);

// Map
$router->map('GET', '/', ['method' => 'home', 'controller' => 'MainController'], 'home_main');
$router->map('GET', '/pokemon/[i:pok_number]', ['method' => 'pokemonDetail', 'controller' => 'MainController'], 'pokemonDetail_main');
$router->map('GET', '/types', ['method' => 'types', 'controller' => 'MainController'], 'types_main');
$router->map('GET', '/types/[i:type_id]', ['method' => 'typeDetail', 'controller' => 'MainController'], 'typeDetail_main');

// Match
$match = $router->match();

// Dispacher
if($match !== false) {
    $matchRoute = $match["target"];
    $methodToCall = $matchRoute["method"];
    $controllerToUse = $matchRoute["controller"];
    $arguments = $match["params"];
} else {
    $methodToCall = "error404";
    $controllerToUse = "MainController";
    $arguments = [];
}

$controller = new $controllerToUse();
$controller->$methodToCall($arguments);
