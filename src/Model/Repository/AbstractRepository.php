<?php

abstract class AbstractRepository
{
    protected $connection;
    protected $tableName;

    public function __construct(PDO $connection)
    {
        $this->connection = $connection;
    }

    public function setTableName(string $tableName)
    {
        $this->tableName = $tableName;
    }

    public function find(int $id)
    {
        $query = "SELECT * FROM {$this->tableName} WHERE id = :id";
        $statement = $this->connection->prepare($query);
        $statement->bindParam(':id', $id, PDO::PARAM_INT);
        $statement->execute();
        return $statement->fetch(PDO::FETCH_ASSOC);
    }

    public function all()
    {
        $query = "SELECT * FROM {$this->tableName}";
        $statement = $this->connection->prepare($query);
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function create(array $data)
    {
        $columns = implode(', ', array_keys($data));
        $placeholders = ':' . implode(', :', array_keys($data));
        $query = "INSERT INTO {$this->tableName} ({$columns}) VALUES ({$placeholders})";
        $statement = $this->connection->prepare($query);
        $statement->execute($data);
        return $this->connection->lastInsertId();
    }

    public function update(int $id, array $data)
    {
        $setStatements = [];
        foreach ($data as $column => $value) {
            $setStatements[] = "{$column} = :{$column}";
        }
        $setStatements = implode(', ', $setStatements);
        $query = "UPDATE {$this->tableName} SET {$setStatements} WHERE id = :id";
        $statement = $this->connection->prepare($query);
        $statement->bindParam(':id', $id, PDO::PARAM_INT);
        $statement->execute($data);
    }

    public function delete(int $id)
    {
        $query = "DELETE FROM {$this->tableName} WHERE id = :id";
        $statement = $this->connection->prepare($query);
        $statement->bindParam(':id', $id, PDO::PARAM_INT);
        $statement->execute();
    }
}