<?php

namespace Tests\Unit;

use App\Domain\PostStorerService;
use Illuminate\Http\Client\Response;
use Tests\TestCase;

class PostStoreServiceTest extends TestCase
{
    /**
     * 
     * @covers storePost
     * @return void
     */
    public function test_store_post_function_returns_response_and_id_attribute()
    {
        $this->withoutExceptionHandling();

        $request = [
            'title' => 'Test unit',
            'body' => 'Body test unit',
            'idUser' => '1'
        ];

        $response = app(PostStorerService::class)->storePost($request);

        $this->assertInstanceOf( Response::class, $response );
        $this->assertArrayHasKey('id', $response);
        $this->assertContains($request['title'], $response->json());
    }

}
