<?php

namespace Models;

abstract class Model
{
    protected $pdo;
    protected $table;

    public function __construct()
    {
        $this->pdo = \Database::getPdo();
    }

    /**
     * Return one articles
     * 
     * @param integer $id
     * @return array
     */

    public function find(int $id)
    {
        $query = $this->pdo->prepare("SELECT * FROM {$this->table} WHERE id = :id");
        $query->execute(['id' => $id]);
        $iteam = $query->fetch();

        return $iteam;
    }

    /**
     * Return articles lists
     * 
     * @return array
     */

    public function findAll(string $order = ""): array
    {
        $sql = "SELECT * FROM {$this->table}";

        if ($order) 
        {
            $sql .= " ORDER BY " . $order;
        }

        $result = $this->pdo->query($sql);
        $iteam = $result->fetchAll();

        return $iteam;
    }
    
    /**
     * Delete one comment by id
     * 
     * @param integer $id
     * @return void
     */

    public function delete(int $id): void
    {
        $query = $this->pdo->prepare("DELETE FROM {$this->table} WHERE id = :id");
        $query->execute(['id' => $id]);
    }
}