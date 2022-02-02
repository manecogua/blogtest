<?php

namespace App\Domain;

class AuthorSearcherService implements IAuthorSearcherService
{
    public function getAuthors()
    {
        return app(IAuthorSearcherAdapter::class)->getAuthors();
    }

    public function getAuthor($id)
    {
        return app(IAuthorSearcherAdapter::class)->getAuthor($id);
    }
}
