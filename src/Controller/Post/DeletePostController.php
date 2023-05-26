<?php

declare(strict_types=1);

namespace App\Controller\Post;

class DeletePostController extends PostController
{
    private $postRepository;

    public function __construct(PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function deletePost(int $postId): void
    {
        $post = $this->postRepository->findById($postId);

        if (!$post) {
            throw new \Exception("Cet article n'existe pas.");
        }

        $this->postRepository->delete($postId);
    }
}
