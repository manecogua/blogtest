<?php

namespace App\Infraestructure;

use Illuminate\Support\Facades\Http;
use \Illuminate\Http\Client\Response;

interface IAuthorsApi
{
    public function getAuthors() : Response;

    public function getAuthor($id) : Response;
}