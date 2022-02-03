<?php

namespace App\Domain;

interface IPostAuthorLinkerService
{
    /**
     * Get a specified post.
     *
     * @return array<mixed>
     */
    public function linkPostAuthor();
}
