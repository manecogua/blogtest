<?php

namespace App\Infraestructure;

use Illuminate\Support\Facades\Http;
use \Illuminate\Http\Client\Response;

class AuthorsApi
{
    public function getAuthors() : Response
    {
        return Http::get(env('URL_JSONPLACEHOLDER_API').'/users');
    }

    public function getAuthor($id) : Response
    {
        return Http::get(env('URL_JSONPLACEHOLDER_API').'/users/'.$id);
    }
}