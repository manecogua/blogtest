<?php

namespace App\Domain;

interface IPostSearcherService
{
    /**
     * 
     *
     * @return \Illuminate\Http\Client\Response
     */
    public function getPosts();

}