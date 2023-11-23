<?php

require_once 'autoload.php';

$routes = include 'routes.php';

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if (array_key_exists($uri, $routes)) {
    list($controller, $method) = explode('@', $routes[$uri]);

    $controllerClass = 'App\\Controllers\\' . $controller;

    $controllerInstance = new $controllerClass();
    $controllerInstance->$method();
} else {
    echo "Erreur 404: Page non trouvée";
}

