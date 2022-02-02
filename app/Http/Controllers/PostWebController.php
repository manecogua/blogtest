<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Infraestructure\PostsApi;
use App\Infraestructure\AuthorsApi;

class PostWebController extends Controller
{

    /**
     * Display listing of posts.
     *
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function getPosts(PostsApi $postsApi)
    {
        $arrayPosts = $postsApi->getPosts()->object();

        return view('posts', compact('arrayPosts'));
    }

    /**
     * Display the specified post.
     *
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function getPost(PostsApi $postsApi, AuthorsApi $authorsApi, $id)
    {
        $post = $postsApi->getPost($id)->object();
        $author = $authorsApi->getAuthor($id)->object();

        return view('post', compact('post', 'author'));
    }
}
