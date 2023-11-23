<?php

namespace Controllers;

require_once('libraries/autoload.php');

class User extends Controller
{
    protected $modelName = \Models\User::class;

    /**
     * show the login or the register page
     * 
     * @return void
     */

    public function show(): void
    {
        \Renderer::render('auth/'. $_GET['page']);
    }

    /**
     * Check all params to register the new user
     * 
     * @return void
     */

    public function register(): void
    {
        $mail = null;
        if (!empty($_POST['mail'])) {
            $mail = htmlspecialchars($_POST['mail']);
        }

        $username = null;
        if (!empty($_POST['username'])) {
            $username = htmlspecialchars($_POST['username']);
        }

        $fullname = null;
        if (!empty($_POST['fullname'])) {
            $fullname = htmlspecialchars($_POST['fullname']);
        }
        
        $password = null;
        if (!empty($_POST['password'])) {
            $password = htmlspecialchars($_POST['password']);
            if ($password != $_POST['password-repeat']) {
                die("Mauvais mot de passe repeat");
            }
        }

        if (!$mail || !$username || !$fullname || !$password) {
            die("Votre formulaire a été mal rempli !");
        }

        $user = $this->model->findUser($username, $mail);

        if ($user) {
            die("Utilisateur existe deja");
        }
        
        $password = password_hash($password, PASSWORD_DEFAULT);
        $this->model->insertUser($mail, $username, $fullname, $password);

        \Renderer::render('auth/login');
    }

    /**
     * Check all informations to log the user
     * 
     * @return void
     */

    public function login(): void
    {
        $username = null;
        if (!empty($_POST['username'])) {
            $username = htmlspecialchars($_POST['username']);
        }

        $password = null;
        if (!empty($_POST['password'])) {
            $password = htmlspecialchars($_POST['password']);
        }

        if (!$username || !$password) {
            die("Votre formulaire a été mal rempli !");
        }

        $user = $this->model->findPass($username);

        if (!$user) {
            die("Utilisateur n'existe pas");
        }

        $password = password_verify($password, $user["password"]);

        if (!$password) {
            die("Mauvais mot de passe");
        }

        $_SESSION['id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['fullname'] = $user['fullname'];
        $_SESSION['date_inscription'] = $user['date_inscription'];

        \Http::redirect("index.php?controller=tweet&task=index");
    }

    public function logout()
    {
        session_destroy();
        \Http::redirect("index.php");
    }
}