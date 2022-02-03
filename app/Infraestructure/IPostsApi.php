<?php

namespace App\Infraestructure;

use Illuminate\Http\Client\Response;

interface IPostsApi
{
    /**
     * Display listing of posts.
     */
    public function getPosts(): Response;

    /**
     * Display especified of post.
     */
    public function getPost(int $id): Response;

    /**
     * Store a post.
     *
     * @param array<mixed> $request
     */
    public function storePost(array $request): Response;
}
