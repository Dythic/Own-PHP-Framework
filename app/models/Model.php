<?php

// Model.php
namespace App\Models;

use App\Database;

abstract class Model
{
    protected $table;
    protected $db;

    public function __construct()
    {
        $this->db = Database::connect();
    }

    // Ajoutez des méthodes CRUD génériques ici
    abstract public function save();
    abstract public function update();
    abstract public function delete();
    abstract public static function find($id);
    abstract public static function all();
}
