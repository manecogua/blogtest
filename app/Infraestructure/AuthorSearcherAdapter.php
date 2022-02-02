<?php

namespace App\Infraestructure;

use App\Domain\IAuthorSearcherAdapter;
use Illuminate\Http\Client\Response;

class AuthorSearcherAdapter implements IAuthorSearcherAdapter
{
    public function getAuthors() : Response
    {
        return app(IAuthorsApi::class)->getAuthors();
    }

    public function getAuthor(int $id) : Response
    {
        return app(IAuthorsApi::class)->getAuthor($id);
    }
}
