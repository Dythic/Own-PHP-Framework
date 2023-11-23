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
        $data = ['message' => 'Bienvenue dans notre framework!'];
        $this->renderView('home', $data);
    }
}
