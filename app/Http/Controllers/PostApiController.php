<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Domain\IPostAuthorLinkerService;
use App\Domain\IPostStorerService;
use App\Http\Requests\StorePostRequest;

class PostApiController extends Controller
{
    /**
     * Get list of posts.
     *
     * @return mixed
     */
    public function getPosts(IPostAuthorLinkerService $iPostSearcherService)
    {
        return $iPostSearcherService->linkPostAuthor();
    }

    /**
     * Save a post from request.
     *
     * @return mixed
     */
    public function storePost(StorePostRequest $request)
    {
        return app(IPostStorerService::class)->storePost($request->all())->json();
    }
}
