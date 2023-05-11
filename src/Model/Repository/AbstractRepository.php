<?php

namespace App\Repository;

use PDO;

abstract class AbstractRepository
{
    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    protected function getPdo(): PDO
    {
        return $this->pdo;
    }

    public function findAll(string $table): array
    {
        $sql = "SELECT * FROM $table";
        $statement = $this->query($sql);
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    protected function query(string $sql, array $params = []): \PDOStatement
    {
        $statement = $this->getPdo()->prepare($sql);
        $statement->execute($params);
        return $statement;
    }
}