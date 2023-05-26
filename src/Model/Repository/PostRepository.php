<?php

namespace App\Model\Repository;

use App\Model\Post;

class PostRepository extends AbstractRepository
{
    public function findAll(): array
    {
        return [
            'title' => 'Mon premier article',
        ];
    }

    public function findById(int $id): ?Post
    {
        $query = "SELECT * FROM {$this->Posts} WHERE id = :id";
        $statement = $this->connection->prepare($query);
        $statement->bindParam(':id', $id, PDO::PARAM_INT);
        $statement->execute();

        $data = $statement->fetch(PDO::FETCH_ASSOC);

        if (!$data) {
            return null;
        }

        $post = new Post();
        $post->setId($data['id']);
        $post->setTitle($data['title']);
        $post->setContent($data['content']);
        
        return $post;
    }
    
    public function create(array $data): int
    {
        $sql = "INSERT INTO {$this->table} (title, content, user_id) VALUES (:title, :content, :user_id)";
        $params = [
            'title' => $data['title'],
            'content' => $data['content'],
            'user_id' => $data['user_id'],
        ];
        $this->query($sql, $params);
        return (int)$this->pdo->lastInsertId();
    }

    public function update(int $id, array $data): void
    {
        $sql = "UPDATE {$this->table} SET title = :title, content = :content WHERE id = :id";
        $params = [
            'id' => $id,
            'title' => $data['title'],
            'content' => $data['content'],
        ];
        $this->query($sql, $params);
    }

    public function delete(int $id): void
    {
        $sql = "DELETE FROM {$this->table} WHERE id = :id";
        $params = ['id' => $id];
        $this->query($sql, $params);
    }
}
