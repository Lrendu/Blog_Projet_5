<?php

declare(strict_types=1);

namespace App\Controller\Comment;

class GetCommentsController extends CommentController
{
    private $commentRepository;

    public function __construct(CommentRepository $commentRepository)
    {
        $this->commentRepository = $commentRepository;
    }

    public function getAllComments(): array
    {
        $comments = $this->commentRepository->findAll();

        return $comments;
    }
}
