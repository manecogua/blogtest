<?php

namespace App\Http\Controllers;

use App\Domain\IPostSearcherService;
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
    public function getPosts(IPostSearcherService $iPostSearcherService)
    {
        $arrayPosts = $iPostSearcherService->getPosts();

        return view('posts', compact('arrayPosts'));
    }

    /**
     * Display the specified post.
     *
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function getPost(IPostsApi $iPostsApi, IAuthorsApi $iAuthorsApi, int $id)
    {
        $post = $iPostsApi->getPost($id)->object();
        $author = $iAuthorsApi->getAuthor($id)->object();

        return view('post', compact('post', 'author'));
    }
}
