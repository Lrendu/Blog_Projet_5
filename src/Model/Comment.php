<?php

namespace App\Model;

class Comment extends AbstractModel
{
    protected $table = 'comments';
    
    private string $title;

    private string $content;

    private int $userId;

    private int $postId;

    private \DateTimeImmutable $createdAt;

}
