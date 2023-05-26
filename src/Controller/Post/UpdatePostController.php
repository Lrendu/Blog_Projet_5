<?php

declare(strict_types=1);

namespace App\Controller\Post;

use App\Model\Post;

class UpdatePostController extends PostController
{
    public function updatePost(int $postId, array $postData): void
    {
        $post = $this->postRepository->findById($postId);

        if (!$post) {
            throw new \Exception("Cet article n'existe pas.");
        }

        $post->setTitle($postData['title']);
        $post->setContent($postData['content']);
        $post->setCreatedAt($postData['created_at']);
        $post->setDescription($postData['description']);

        if (isset($postData['media'])) {
            $post->setMedia($postData['media']);
        }

        $this->postRepository->update($postId, [
            'title' => $post->getTitle(),
            'content' => $post->getContent(),
            'created_at' => $post->getCreatedAt(),
            'updated_at' => $post->getUpdatedAt(),
            'description' => $post->getDescription(),
            'media' => $post->getMedia(),
        ]);
    }
}
