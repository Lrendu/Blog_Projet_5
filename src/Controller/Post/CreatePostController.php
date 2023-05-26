<?php

declare(strict_types=1);

namespace App\Controller\Post;

class CreatePostController extends PostController
{
    public function createPost(array $postData): void
    {
        $post = new Post();
        $post->setTitle($postData['title']);
        $post->setContent($postData['content']);
        $post->setCreatedAt($postData['created_at']);
        $post->setDescription($postData['description']);
        if (isset($postData['media'])) {
            $post->setMedia($postData['media']);
        }

        $postId = $this->postRepository->create([
            'title' => $post->getTitle(),
            'content' => $post->getContent(),
        ]);

        header(' /post/' . $postId);
        exit();
    }
}
