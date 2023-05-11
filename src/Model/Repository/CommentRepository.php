<?php 

namespace App\Repository;

use App\Model\Comment;

class CommentRepository extends AbstractRepository
{
    public function findAllByPostId(int $postId): array
    {
        $sql = 'SELECT * FROM comments WHERE post_id = :post_id';
        $params = ['post_id' => $postId];
        $statement = $this->query($sql, $params);
        return $statement->fetchAll(\PDO::FETCH_CLASS, Comment::class);
    }
}