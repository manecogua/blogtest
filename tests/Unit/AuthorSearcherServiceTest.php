<?php

namespace Tests\Unit;

use App\Domain\AuthorSearcherService;
use Illuminate\Http\Client\Response;
use Tests\TestCase;

class AuthorSearcherServiceTest extends TestCase
{
    /**
     * 
     * @covers getAuthors
     * @return void
     */
    public function test_get_author_function_returns_response()
    {
        $this->withoutExceptionHandling();
        $this->assertInstanceOf(Response::class, app(AuthorSearcherService::class)->getAuthors());
    }
    
    /**
     * 
     * @covers getAuthor
     * @return void
     */
    public function test_get_authors_function_returns_response()
    {
        $this->withoutExceptionHandling();
        $this->assertInstanceOf(Response::class, app(AuthorSearcherService::class)->getAuthor(1));
    }


}
