<?php

namespace App\Domain;

use Illuminate\Http\Client\Response;

interface IPostStorerService
{
    public function storePost(array $request): Response;
}
