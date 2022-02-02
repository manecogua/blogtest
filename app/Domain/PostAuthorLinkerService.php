<?php

namespace App\Domain;

use Illuminate\Support\Collection;
use PhpParser\Node\Expr\Cast\Object_;

use function PHPSTORM_META\map;

class PostAuthorLinkerService implements IPostAuthorLinkerService
{
    public function linkPostAuthor(){
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