<?php

namespace App\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        // Utilise des méthodes ou des propriétés du contrôleur de base si nécessaire
        $this->renderView('home', ['title' => 'Page d\'accueil']);
    }
}
