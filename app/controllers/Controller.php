<?php

namespace App\Controllers;

abstract class Controller
{
    /**
     * Rendre une vue
     *
     * @param string $view
     * @param array $data
     * @return void
     */
    protected function renderView($view, $data = [])
    {
        $viewPath = __DIR__ . '/../views/' . $view . '.php';

        if (file_exists($viewPath)) {
            extract($data);

            ob_start();

            require $viewPath;

            $content = ob_get_clean();

            require __DIR__ . '/../views/layout.php';
        } else {
            echo "Erreur : La vue '$view' n'a pas été trouvée.";
        }
    }
}
