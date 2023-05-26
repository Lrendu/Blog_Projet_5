<?php

namespace App\Controller;

use App\Model\Comment;
use App\Model\Repository\CommentRepository;

class CommentController extends Controller
{
    public function __construct(CommentRepository $commentRepository)
    {
        $this->commentRepository = $commentRepository;
    }
}
