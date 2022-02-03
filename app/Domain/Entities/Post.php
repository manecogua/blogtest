<?php

namespace App\Domain\Entities;

class Post
{
    private int $id;
    private String $title;
    private String $body;
    private Author $author;

    private function __construct(int $id, String $title, String $body, Author $author)
    {
        $this->id = $id;
        $this->$title = $title;
        $this->body = $body;
        $this->author = $author;
    }

    public function getId() : int
    {
        return $this->id;
    }

    public function getTitle() : String
    {
        return $this->title;
    }

    public function getBody() : String
    {
        return $this->body;
    }

    public function getAuthor(): Author
    {
        return $this->author;
    }
}
