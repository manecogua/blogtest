<?php

namespace App\Domain;

interface IPostSearcherService
{
    /**
     * Getlist of posts.
     *
     * @return \Illuminate\Http\Client\Response
     */
    public function getPosts();

    /**
     * Get especified post.
     *
     * @return \Illuminate\Http\Client\Response
     */
    public function getPost(int $id);
}
