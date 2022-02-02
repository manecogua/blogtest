<?php

namespace App\Infraestructure;

use App\Domain\IPostSearcherAdapter;

class PostSearcherAdapter implements IPostSearcherAdapter
{
    public function getPosts()
    {
        return app(IPostsApi::class)->getPosts();
    }

    public function getPost(int $id)
    {
        return app(IPostsApi::class)->getPost($id);
    }
}
