<?php

namespace App\Domain;

class PostSearcherService implements IPostSearcherService
{
    public function getPosts()
    {
        return app(IPostSearcherAdapter::class)->getPosts();
    }

    public function getPost(int $id)
    {
        return app(IPostSearcherAdapter::class)->getPost($id);
    }
}
