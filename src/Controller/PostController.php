<?php

namespace App\Controller;
use App\Model\Post;

class PostController extends Controller
{
    public function index()
    {
    }

    protected function renderPost(string $identifier)
    {
        $post = $this->getPost($identifier);

        echo $this->renderView('post.html.twig', [
            'post' => $post,
        ]);
    }

    private function getPost(string $identifier): Post 
    {
        $postRepository = new PostRepository($blog_lr); 

        $post = $postRepository->findById($id);
    
        if (!$post) {
            return null;
        }
    
        return $post;
    }
}
