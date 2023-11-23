<?php

namespace App\Models;

class UserModel extends Model
{
    protected $table = 'users';

    public function getAllUsers()
    {
        $stmt = $this->db->query("SELECT * FROM $this->table");
        return $stmt->fetchAll();
    }

    public function save()
    {
        // Logique pour sauvegarder un nouvel utilisateur
    }

    public function update()
    {
        // Logique pour mettre à jour un utilisateur existant
    }

    public function delete()
    {
        // Logique pour supprimer un utilisateur
    }

    public static function find($id)
    {
        // Logique pour trouver un utilisateur par ID
    }

    public static function all()
    {
        // Logique pour récupérer tous les utilisateurs
    }
}
