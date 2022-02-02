<?php

namespace App\Http\Controllers;

use App\Domain\IAuthorSearcherService;
use App\Domain\IPostAuthorLinkerService;
use App\Domain\IPostSearcherService;

class PostWebController extends Controller
{
    /**
     * Display listing of posts.
     *
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function getPosts(IPostAuthorLinkerService $iPostSearcherService)
    {
        $arrayPosts = $iPostSearcherService->linkPostAuthor();

        return view('posts', compact('arrayPosts'));
    }

    /**
     * Display the specified post.
     *
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function getPost(IPostSearcherService $iPostSearcherService, IAuthorSearcherService $iAuthorSearcherService, int $id)
    {
        $post = $iPostSearcherService->getPost($id)->object();
        $author = $iAuthorSearcherService->getAuthor($post->userId)->object();

        return view('post', compact('post', 'author'));
    }
}
