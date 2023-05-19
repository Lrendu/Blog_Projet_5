<?php

namespace App\Controller;

use App\Repository\CommentRepository;
use Symfony\Component\HttpFoundation\Request;

class CommentsController
{
    private $commentRepository;

    public function __construct(CommentRepository $commentRepository)
    {
        $this->commentRepository = $commentRepository;
    }

    public function list(Request $request, int $postId)
    {
        $comments = $this->commentRepository->findAllByPostId($postId);
    }

    public function create(Request $request, int $postId)
    {
        if ($request->isMethod('POST')) {
            $data = $request->request->all();
            $comment = new Comment();
            $comment->setPostId($postId);
            $comment->setAuthor($data['author']);
            $comment->setContent($data['content']);
            $this->commentRepository->save($comment);
        }
    }
}
