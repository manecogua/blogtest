<?php

namespace App\Domain;

use Illuminate\Http\Client\Response;

interface IAuthorSearcherAdapter
{
    public function getAuthors() :  Response;

    public function getAuthor(int $id) :  Response;
}
