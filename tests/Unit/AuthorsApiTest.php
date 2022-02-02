<?php

namespace Tests\Unit;

use App\Infraestructure\AuthorsApi;
use Illuminate\Http\Client\Response;
use Tests\TestCase;

class AuthorsApiTest extends TestCase
{
    /**
     * 
     * @covers getAuthors
     * @return void
     */
    public function test_get_authors_function_returns_response_and_200_status()
    {
        $this->withoutExceptionHandling();

        $response = app(AuthorsApi::class)->getAuthors();
        $this->assertInstanceOf( Response::class, $response );
        $this->assertEquals(200, $response->status());
    }

    /**
     * 
     * @covers getAuthor
     * @return void
     */
    public function test_get_author_function_returns_response_and_200_status()
    {
        $this->withoutExceptionHandling();

        $response = app(AuthorsApi::class)->getAuthor(1);
        $this->assertInstanceOf( Response::class, $response );
        $this->assertEquals(200, $response->status());
    }
}
