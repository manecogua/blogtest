<?php

namespace App\Infraestructure;

use Illuminate\Support\Facades\Http;
use \Illuminate\Http\Client\Response;

class PostsApi
{
    public function getPosts() : Response
    {
        return Http::get(env('URL_JSONPLACEHOLDER_API').'/posts');
    }

    public function getPost($id) : Response
    {
        return Http::get(env('URL_JSONPLACEHOLDER_API').'/posts/'.$id);
    }
}