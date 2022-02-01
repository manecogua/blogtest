<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Infraestructure\PostsApi;

class PostSearcherController extends Controller
{
    //private PostsApi $postsApi;

    public function __construct()
    {
        
    }

    /**
     * Display listing of resource.
     *
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function getPosts(PostsApi $postsApi)
    {
        $arrayPosts = $postsApi->getPosts()->object();

        return view('posts', compact('arrayPosts'));
    }
}
