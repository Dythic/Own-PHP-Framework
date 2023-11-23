<?php

// MiddlewareManager.php
namespace App\Middleware;

class MiddlewareManager
{
    private $middlewares = [];

    public function addMiddleware($middleware)
    {
        $this->middlewares[] = $middleware;
    }

    public function handle($request)
    {
        $next = function ($request) {
            // Cette fonction anonyme est passée à chaque middleware
            // Elle appelle le middleware suivant dans la liste ou la gestion de la requête principale
            if (!empty($this->middlewares)) {
                $middleware = array_shift($this->middlewares);
                return $middleware->handle($request, $this->nextClosure());
            }

            // Gestion de la requête principale ici
            // ...

            return 'Réponse de la gestion de la requête principale';
        };

        // Démarrage de la chaîne des middlewares
        return $next($request);
    }

    private function nextClosure()
    {
        // Cette fonction anonyme est utilisée pour créer une fermeture contenant le prochain middleware
        // Elle sera passée à chaque middleware pour appeler le suivant dans la liste
        return function ($request) {
            return $this->handle($request);
        };
    }
}
