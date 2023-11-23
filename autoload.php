<?php

/**
 * Autoload the require 
 * 
 * @return void 
 */

spl_autoload_register(function ($className): void 
{
    // Convertit les barres obliques inverses en barres obliques dans le nom de classe
    $class = str_replace('\\', DIRECTORY_SEPARATOR, $className);

    // Construire le chemin vers le fichier de classe
    $file = __DIR__ . '/' . $class . '.php';

    // Vérifie si le fichier de classe existe
    if (file_exists($file)) {
        require_once $file;
        return;
    }
});
