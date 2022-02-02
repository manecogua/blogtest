<?php

namespace Tests\Unit;

use App\Infraestructure\PostsApi;
use Illuminate\Http\Client\Response;
use Tests\TestCase;

class PostsApiTest extends TestCase
{
    /**
     * 
     * @covers getPosts
     * @return void
     */
    public function test_get_posts_function_returns_response_and_200_status()
    {
        $this->withoutExceptionHandling();

        $response = app(PostsApi::class)->getPosts();
        $this->assertInstanceOf( Response::class, $response );
        $this->assertEquals(200, $response->status());
    }

    /**
     * 
     * @covers getPost
     * @return void
     */
    public function test_get_post_function_returns_response_and_200_status()
    {
        $this->withoutExceptionHandling();

        $response = app(PostsApi::class)->getPost(1);
        $this->assertInstanceOf( Response::class, $response );
        $this->assertEquals(200, $response->status());
    }

    /**
     * 
     * @covers storePost
     * @return void
     */
    public function test_store_post_function_returns_response_and_201_status()
    {
        $this->withoutExceptionHandling();

        $request = [
            'title' => 'Test unit',
            'body' => 'Body test unit',
            'idUser' => '1'
        ];
        $response = app(PostsApi::class)->storePost($request);
        $this->assertInstanceOf( Response::class, $response );
        $this->assertEquals(201, $response->status());
    }

    /**
     * 
     * @covers storePost
     * @return void
     */
    public function test_store_post_function_returns_id_attribute()
    {
        $this->withoutExceptionHandling();

        $request = [
            'title' => 'Test unit',
            'body' => 'Body test unit',
            'idUser' => '1'
        ];
        $response = app(PostsApi::class)->storePost($request);
        $this->assertArrayHasKey('id', $response);
        $this->assertContains($request['title'], $response->json());
    }
}
