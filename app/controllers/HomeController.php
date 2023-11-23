<?php

namespace App\Controllers;

class HomeController extends Controller
{
    /**
     * Affiche la page d'accueil
     * 
     * @return void
     */
    public function index()
    {
        $this->renderView('home', ['title' => 'Page d\'accueil']);
    }
}
