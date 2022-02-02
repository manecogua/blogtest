<?php

namespace App\Infraestructure;

use App\Domain\IPostSearcherAdapter;
use App\Infraestructure\IPostsApi;
use App\Infraestructure\IAuthorsApi;

class PostSearcherAdapter implements IPostSearcherAdapter
{

    public function getPosts() {
        return app(IPostsApi::class)->getPosts();
    }

    public function getPost($id) {
        return app(IPostsApi::class)->getPost($id);
    }
}