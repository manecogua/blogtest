<?php

namespace App\Domain;

interface IPostSearcherAdapter
{
    /**
     * Get list of posts.
     *
     * @return \Illuminate\Http\Client\Response
     */
    public function getPosts();

    /**
     * Get a specified post.
     *
     * @return \Illuminate\Http\Client\Response
     */
    public function getPost(int $id);
}
