<?php

// Middleware.php
namespace App\Middleware;

class Middleware
{
    public function handle($request, $next)
    {
        // Logique du middleware avant la gestion de la requête principale

        // Appel au middleware suivant ou à la gestion de la requête principale
        $response = $next($request);

        // Logique du middleware après la gestion de la requête principale

        return $response;
    }
}
