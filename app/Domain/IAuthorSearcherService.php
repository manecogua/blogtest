<?php

namespace App\Domain;

interface IAuthorSearcherService
{
    /**
     * Get list of authors.
     *
     * @return mixed
     */
    public function getAuthors();

    /**
     * Get especified author.
     *
     * @return mixed
     */
    public function getAuthor($id);
}
