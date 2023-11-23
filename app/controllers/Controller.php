<?php

namespace App\Controllers;

class Controller
{
    // Des méthodes ou des propriétés communes à tous les contrôleurs peuvent être définies ici

    protected function renderView($view, $data = [])
    {
        // Construire le chemin vers le fichier de vue (ajustez selon votre structure)
        $viewPath = __DIR__ . '/../views/' . $view . '.php';

        // Vérifier si le fichier de vue existe
        if (file_exists($viewPath)) {
            // Extraire les données pour les rendre disponibles dans la vue
            extract($data);

            // Démarrer la mise en tampon de sortie
            ob_start();

            // Inclure le contenu de la vue
            require $viewPath;

            // Récupérer le contenu de la vue et le stocker dans une variable
            $content = ob_get_clean();

            // Inclure le layout avec le contenu de la vue inséré
            require __DIR__ . '/../views/layout.php';
        } else {
            // Gérer le cas où le fichier de vue n'existe pas
            echo "Erreur : La vue '$view' n'a pas été trouvée.";
        }
    }
}
