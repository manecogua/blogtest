<?php

namespace App\Http\Controllers;

use App\Domain\IPostAuthorLinkerService;
use App\Domain\IPostStorerService;
use App\Http\Requests\StorePostRequest;
use Illuminate\Http\Request;

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
