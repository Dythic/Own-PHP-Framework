<?php

namespace App\Controllers;

use App\Models\UserModel;

class UserController extends Controller
{
    /**
     * Affiche la liste des utilisateurs
     * 
     * @return void
     */
    public function index()
    {
        $userModel = new UserModel();
        $users = $userModel->all();

        $this->renderView('home', ['title' => 'Page d\'accueil']);
    }
}
