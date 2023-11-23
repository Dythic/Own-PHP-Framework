<?php

// AuthMiddleware.php
namespace App\Middleware;

class AuthMiddleware extends Middleware
{
    public function handle($request, $next)
    {
        // Logique d'authentification avant la gestion de la requête principale

        // Appel au middleware suivant ou à la gestion de la requête principale
        $response = $next($request);

        // Logique d'authentification après la gestion de la requête principale

        return $response;
    }
}
