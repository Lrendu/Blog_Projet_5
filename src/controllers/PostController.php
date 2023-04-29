<?php
// controllers/post.php
namespace App\Controller;

use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;

class PostController extends MainController {
    public function index() {
    }

    function post(string $identifier)
    {
        $post = getPost($identifier);
        $comments = getComments($identifier);

        require('views/post.twig');
    }

}
