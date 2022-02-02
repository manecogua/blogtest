<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Domain\PostAuthorLinkerService;

class PostAuthorLinkerServiceTest extends TestCase
{
    /**
     * 
     * @covers linkPostAuthor
     * @return void
     */
    public function test_link_post_authors_function_returns_array()
    {
        $this->withoutExceptionHandling();
        $this->assertIsArray( app(PostAuthorLinkerService::class)->linkPostAuthor() );
    }
}
