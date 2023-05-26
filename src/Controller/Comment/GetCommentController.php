<?php

namespace App\Controller\Comment;

class GetCommentsController extends CommentController
{
   protected function render(string $identifier): void
    {
        $comment = $this->getComment($identifier);

        echo $this->renderView('comment.html.twig', [
            'comment' => $comment,
        ]);
    }

    private function getComment(int $identifier): Comment
    {
        $commentRepository = new CommentRepository();

        $comment = $commentRepository->findById($identifier);
    
        if (!$comment) {
            return null;
        }
    
        return $comment;
    }
}
