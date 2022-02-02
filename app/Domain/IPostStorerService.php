<?php

namespace App\Domain;

use Illuminate\Http\Client\Response;

interface IPostStorerService
{
    /**
     * Get a specified post.
     * @param array<mixed> $request
     */
    public function storePost(array $request): Response;
}
