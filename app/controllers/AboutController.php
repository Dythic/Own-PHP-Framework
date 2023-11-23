<?php

namespace App\Controllers;

class AboutController extends Controller
{
    /**
     * Affiche la page "A propos"
     * 
     * @return void
     */

    public function index()
    {
        $this->renderView('about', ['title' => 'A propos']);
    }
}
