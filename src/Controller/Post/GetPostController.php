<?php

namespace App\Controller\Post;

class GetPostController extends PostController
{
   protected function render(string $identifier): void
    {
        $post = $this->getPost($identifier);

        echo $this->renderView('post.html.twig', [
            'post' => $post,
        ]);
    }

    private function getPost(int $identifier): Post
    {
        $postRepository = new PostRepository();

        $post = $postRepository->findById($identifier);
    
        if (!$post) {
            return null;
        }
    
        return $post;
    }
}