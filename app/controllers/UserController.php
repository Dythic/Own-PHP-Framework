<?php

// Exemple d'utilisation dans un contrôleur
namespace App\Controllers;

use App\Models\UserModel;

class UserController extends Controller
{
    public function index()
    {
        $userModel = new UserModel();
        $users = $userModel->getAllUsers();

        // Utilisez $users dans la vue ou faites d'autres opérations
        // ...
    }
}
