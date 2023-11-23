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
}
