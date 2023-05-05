<?php

namespace App\Controller;

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

    private function getPost(string $identifier): Post // ici il faudra créer un Model "Post" qui sera un objet représentant un article de blog
    {
        // ici il faudra faire appel à la base de données pour récupérer l'article de blog dans un objet Post
    }
}