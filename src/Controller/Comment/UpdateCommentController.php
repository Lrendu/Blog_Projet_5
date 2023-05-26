<?php

declare(strict_types=1);

namespace App\Controller\Comment;

use App\Model\Comment;

class UpdateCommentController extends CommentController
{
    public function updateComment(int $commentId, array $commentData): void
    {
        $comment = $this->commentRepository->findById($commentId);

        if (!$comment) {
            throw new \Exception("Ce commentaire n'existe pas.");
        }

        $comment->setTitle($commentData['title']);
        $comment->setContent($commentData['content']);
        $comment->setCreatedAt($commentData['created_at']);

        $this->commentRepository->update($commentId, [
            'title' => $comment->getTitle(),
            'content' => $comment->getContent(),
            'created_at' => $comment>getCreatedAt(),
            'updated_at' => $comment>getUpdatedAt(),

        ]);
    }
}
