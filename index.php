<?php

// index.php
require_once 'autoload.php';

// Charger les routes
$routes = include 'routes.php';

// Récupérer le chemin de l'URL demandée
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Vérifier si le chemin correspond à une route définie
if (array_key_exists($uri, $routes)) {
    // Diviser la route en contrôleur et méthode
    list($controller, $method) = explode('@', $routes[$uri]);

    // Construire le nom de la classe du contrôleur
    $controllerClass = 'App\\Controllers\\' . $controller;

    // Instancier le contrôleur et appeler la méthode
    $controllerInstance = new $controllerClass();
    $controllerInstance->$method();
} else {
    // Gérer le cas où la route n'est pas trouvée
    echo "Erreur 404: Page non trouvée";
}

