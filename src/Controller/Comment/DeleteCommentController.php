<?php

declare(strict_types=1);

namespace App\Controller\Comment;

class DeleteCommentController extends CommentController
{
    private $commentRepository;

    public function __construct(CommentRepository $commentRepository)
    {
        $this->commentRepository = $commentRepository;
    }

    public function deleteComment(int $commentId): void
    {
        $comment = $this->commentepository->findById($commentId);

        if (!$comment) {
            throw new \Exception("Ce commentaire n'existe pas.");
        }

        $this->commentRepository->delete($commentId);
    }
}
