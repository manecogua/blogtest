<?php

namespace App\Infraestructure;

use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;

class AuthorsApi implements IAuthorsApi
{
    public function getAuthors(): Response
    {
        return Http::get(env('URL_JSONPLACEHOLDER_API').'/users');
    }

    public function getAuthor(int $id): Response
    {
        return Http::get(env('URL_JSONPLACEHOLDER_API').'/users/'.$id);
    }
}
