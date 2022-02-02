<?php

namespace App\Domain;

class PostAuthorLinkerService implements IPostAuthorLinkerService
{
    public function linkPostAuthor()
    {
        $posts = app(IPostSearcherService::class)->getPosts()->object();
        $authors = app(IAuthorSearcherService::class)->getAuthors()->collect();
        $response = [];
        foreach ($posts as $post) {
            $author = $authors->firstWhere('id', $post->userId);
            $post->author = $author;
            $response[] = $post;
        }

        return $response;
    }
}
