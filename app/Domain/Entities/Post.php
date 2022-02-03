<?php

namespace App\Domain\Entities;

class Post
{
    private int $id;
    private String $title;
    private String $body;
    private Author $author;

    private function __construct(int $id, string $title, string $body, Author $author)
    {
        $this->id = $id;
        $this->$title = $title;
        $this->body = $body;
        $this->author = $author;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getBody(): string
    {
        return $this->body;
    }

    public function getAuthor(): Author
    {
        return $this->author;
    }
}
