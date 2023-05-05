<?php

namespace App\Model;

class Post 
{
    private int $id;
	private int $userId;
    private string $title;
    private string $content;
    private \DateTime $createdAt;
    private \DateTime $editedAt;
	private string $description;

    public function __construct(string $title, string $content) {
        $this->title = $title;
        $this->content = $content;
        $this->createdAt = new \DateTime();
        $this->editedAt = new \DateTime();
    }

    public function getId() {
        return $this->id;
    }

    public function getTitle() {
        return $this->title;
    }

	public function getUserId() {
        return $this->userId;
    }

	public function getdescription() {
        return $this->description;
    }

    public function getContent() {
        return $this->content;
    }

    public function getCreatedAt() {
        return $this->createdAt;
    }

    public function getEditedAt() {
        return $this->editedAt;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setTitle($title) {
        $this->title = $title;
        $this->editedAt = new \DateTime();
    }

    public function setContent($content) {
        $this->content = $content;
        $this->editedAt = new \DateTime();
    }
}