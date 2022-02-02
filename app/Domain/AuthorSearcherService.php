<?php

namespace App\Domain;

class AuthorSearcherService implements IAuthorSearcherService
{
    public function getAuthors()
    {
        return app(IAuthorSearcherAdapter::class)->getAuthors();
    }

    public function getAuthor(int $id)
    {
        return app(IAuthorSearcherAdapter::class)->getAuthor($id);
    }
}
