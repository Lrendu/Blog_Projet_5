<?php

declare(strict_types=1);

namespace App\Controller\Post;

class GetPostsController extends PostController
{
    private $postRepository;

    public function __construct(PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function getAllPosts(): array
    {
        $posts = $this->postRepository->findAll();

        return $posts;
    }
}
