<?php

namespace Models;

class User extends Model
{
    protected $table = 'members';

    /**
     *  Find user in database 
     * 
     * 
     */

    public function findUser(string $username, string $mail)
    {
        $query = $this->pdo->prepare("SELECT * FROM members WHERE username = :username OR email = :mail");
        $query->execute(compact('username', 'mail'));
        $user = $query->fetch();

        return $user;
    }

    /**
     * 
     * 
     * 
     */

    public function findPass(string $username)
    {
        $query = $this->pdo->prepare("SELECT * FROM members WHERE username = :username");
        $query->execute(compact('username'));
        $hash = $query->fetch();

        return $hash;
    }

    /**
     * Insert user in database
     * 
     * 
     */

    public function insertUser(string $mail, string $username, string $fullname, string $password): void
    {
        $query = $this->pdo->prepare('INSERT INTO members SET email = :mail, username = :username, fullname = :fullname, password = :password');
        $query->execute(compact('mail', 'username', 'fullname', 'password'));
    }
}