<?php

namespace App\Domain;

interface IPostSearcherAdapter
{
    public function getPosts();

    public function getPost($id);
}
