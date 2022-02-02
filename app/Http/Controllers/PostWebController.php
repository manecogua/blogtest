<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Infraestructure\IPostsApi;
use App\Infraestructure\IAuthorsApi;

class PostWebController extends Controller
{

    /**
     * Display listing of posts.
     *
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function getPosts(IPostsApi $iPostsApi)
    {
        $arrayPosts = $iPostsApi->getPosts()->object();

        return view('posts', compact('arrayPosts'));
    }

    /**
     * Display the specified post.
     *
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function getPost(IPostsApi $iPostsApi, IAuthorsApi $iAuthorsApi, $id)
    {
        $post = $iPostsApi->getPost($id)->object();
        $author = $iAuthorsApi->getAuthor($id)->object();

        return view('post', compact('post', 'author'));
    }
}
