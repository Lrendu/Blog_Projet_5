<?php

namespace App\Controller;

use App\Repository\PostRepository;
use PDO;

class PostController
{
    private $postRepository;

    public function __construct()
    {
        $pdo = new PDO("mysql:host=localhost;dbname=blog_lr", "testuser", "testpassword");
        $this->postRepository = new PostRepository($pdo);
    }
    public function index()
    {
        $posts = $this->postRepository->findAll();
    }

    public function show($id)
    {
        $post = $this->postRepository->findById($id);
    }
}