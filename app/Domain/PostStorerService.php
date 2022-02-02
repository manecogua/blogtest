<?php

namespace App\Domain;

use Illuminate\Http\Client\Response;

class PostStorerService implements IPostStorerService
{
    /**
     * Get a specified post.
     * @param array<mixed> $request
     */
    public function storePost(array $request): Response
    {
        return app(IPostStorerAdapter::class)->storePost($request);
    }
}
