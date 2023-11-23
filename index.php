<?php

// Chargement de l'autoloader
require_once 'autoload.php';

// Exemple d'utilisation du framework
use App\Controllers\HomeController;

// Création d'une instance du contrôleur Home
$homeController = new HomeController();

// Appel d'une méthode du contrôleur
$homeController->index();
