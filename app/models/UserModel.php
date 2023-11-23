<?php

// UserModel.php
namespace App\Models;

class UserModel extends Model
{
    protected $table = 'users';

    public function getAllUsers()
    {
        $stmt = $this->db->query("SELECT * FROM $this->table");
        return $stmt->fetchAll();
    }

    // Ajoutez d'autres méthodes spécifiques aux utilisateurs ici
}
