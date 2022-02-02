<?php

namespace App\Domain;

use Illuminate\Http\Client\Response;

interface IPostStorerAdapter
{
    /**
     * Store a post.
     * @param array<mixed> $request
     */
    public function storePost(array $request): Response;
}
