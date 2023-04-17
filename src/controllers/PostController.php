<?php
// controllers/post.php
namespace App\Controller;

function post(string $identifier)
{
    $post = getPost($identifier);
    $comments = getComments($identifier);

    require('views/post.twig');
}