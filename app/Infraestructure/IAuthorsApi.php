<?php

namespace App\Infraestructure;

use Illuminate\Http\Client\Response;

interface IAuthorsApi
{
    public function getAuthors(): Response;

    public function getAuthor($id): Response;
}
