<?php

namespace Tests\Feature;

use Tests\TestCase;

class ApiEndpointsTest extends TestCase
{
    public function test_list_post_can_be_received() : void
    {
        $this->withoutExceptionHandling();

        $response = $this->get('/api/posts');

        $response->assertStatus(200);
        $response->assertJsonStructure([
            '*'=>[
                'userId',
                'id',
                'title',
                'body',
                'author' => [
                    'id',
                    'name',
                    'username',
                    'email',
                    'address'=> [
                        'street',
                        'suite',
                        'city',
                        'zipcode',
                        'geo'=> [
                            'lat',
                            'lng'
                        ]
                    ],
                    'phone',
                    'website',
                    'company' => [
                        'name',
                        'catchPhrase',
                        'bs'
                    ]

                ]
            ]
        ]);
    }

    public function test_post_can_be_stored() : void
    {
        $this->withoutExceptionHandling();

        $request = [
            'title' => 'pora',
            'body' => 'mas asd asd as das asdas da sdasdd',
            'userId' => 3
        ];
        
        $response = $this->postJson('/api/posts', $request);

        $response->assertOk();
        $response->assertJsonFragment($request);
        $response->assertJsonStructure([
            'body',
            'title',
            'userId',
            'id'
        ]);
    }
}
