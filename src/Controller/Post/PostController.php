<?php

namespace App\Controller;

use App\Model\Post;
use App\Model\Repository\PostRepository;

class PostController extends Controller
{
    public function __construct(PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }
}
