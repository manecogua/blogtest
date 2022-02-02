<?php

namespace App\Infraestructure;

use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;

class PostsApi implements IPostsApi
{
    public function getPosts(): Response
    {
        return Http::get(env('URL_JSONPLACEHOLDER_API').'/posts');
    }

    public function getPost($id): Response
    {
        return Http::get(env('URL_JSONPLACEHOLDER_API').'/posts/'.$id);
    }

    public function storePost(array $request): Response
    {
        return Http::post(env('URL_JSONPLACEHOLDER_API').'/posts', $request);
    }
}
