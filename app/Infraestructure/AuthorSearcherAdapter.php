<?php

namespace App\Infraestructure;

use App\Domain\IAuthorSearcherAdapter;

class AuthorSearcherAdapter implements IAuthorSearcherAdapter
{
    public function getAuthors()
    {
        return app(IAuthorsApi::class)->getAuthors();
    }

    public function getAuthor($id)
    {
        return app(IAuthorsApi::class)->getAuthor($id);
    }
}
