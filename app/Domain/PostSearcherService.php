<?php

namespace App\Domain;

use App\Domain\IPostSearcherAdapter;

class PostSearcherService implements IPostSearcherService
{
    /**
     * Get list of posts.
     *
     * @return mixed
     */
    public function getPosts()
    {
        return app(IPostSearcherAdapter::class)->getPosts();
        
    }
}