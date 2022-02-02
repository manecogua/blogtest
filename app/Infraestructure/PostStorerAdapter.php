<?php

namespace App\Infraestructure;

use App\Domain\IPostStorerAdapter;
use Illuminate\Http\Client\Response;

class PostStorerAdapter implements IPostStorerAdapter
{
    public function storePost(array $request): Response
    {
        return app(IPostsApi::class)->storePost($request);
    }
}
