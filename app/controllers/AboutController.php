<?php

namespace App\Controllers;

class AboutController extends Controller
{
    public function index()
    {
        // Utilise des méthodes ou des propriétés du contrôleur de base si nécessaire
        $this->renderView('about', ['title' => 'A propos']);
    }
}
