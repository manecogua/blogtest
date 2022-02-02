<?php

namespace App\Infraestructure;

use App\Domain\IPostSearcherAdapter;
use App\Infraestructure\IPostsApi;
use App\Infraestructure\IAuthorsApi;

class PostSearcherAdapter implements IPostSearcherAdapter
{

    public function getPosts() {
        $arrayPosts = app(IPostsApi::class)->getPosts()->object();
        return $arrayPosts;
    }
}