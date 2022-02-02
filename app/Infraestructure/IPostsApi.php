<?php

namespace App\Infraestructure;

use Illuminate\Support\Facades\Http;
use \Illuminate\Http\Client\Response;

interface IPostsApi
{
    /**
     * Display listing of posts.
     *
     * @return \Illuminate\Http\Client\Response
     */
    public function getPosts() : Response;

    /**
     * Display especified of post.
     *
     * @return \Illuminate\Http\Client\Response
     */
    public function getPost($id) : Response;
}