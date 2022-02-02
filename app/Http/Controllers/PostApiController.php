<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Domain\IPostAuthorLinkerService;

class PostApiController extends Controller
{
    /**
     * Get list of posts.
     *
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function getPosts(IPostAuthorLinkerService $iPostSearcherService)
    {
        return $iPostSearcherService->linkPostAuthor();
    }
}
