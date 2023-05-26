<?php

declare(strict_types=1);

namespace App\Controller\Comment;

class CreateCommentController extends CommentController
{
    public function createComment(array $commentData): void
    {
        $comment = new Comment();
        $comment->setTitle($commentData['title']);
        $comment->setContent($commentData['content']);
        $comment->setCreatedAt($commentData['created_at']);
        $commentId = $this->commentRepository->create([
            'title' => $comment->getTitle(),
            'content' => $comment->getContent(),
        ]);

        header(' /comment/' . $commentId);
        exit();
    }
}
