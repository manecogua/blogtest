<?php

namespace App\Domain;

use App\Domain\IPostSearcherAdapter;

class PostSearcherService implements IPostSearcherService
{
    public function getPosts()
    {
        return app(IPostSearcherAdapter::class)->getPosts();
        
    }
    
    public function getPost($id)
    {
        return app(IPostSearcherAdapter::class)->getPost($id);
        
    }
}