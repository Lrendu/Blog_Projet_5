<?php

namespace App\Model;

class Post extends AbstractModel
{
    protected $table = 'posts';

    private string $title;

    private string $content;

    private \DateTimeImmutable $createdAt;
}
