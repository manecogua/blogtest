<?php

namespace App\Domain;

use Illuminate\Http\Client\Response;

interface IPostStorerAdapter
{
    public function storePost(array $request): Response;
}
