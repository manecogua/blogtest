<?php

namespace App\Domain;

use Illuminate\Http\Client\Response;

class PostStorerService implements IPostStorerService
{
    public function storePost(array $request): Response
    {
        return app(IPostStorerAdapter::class)->storePost($request);
    }
}
