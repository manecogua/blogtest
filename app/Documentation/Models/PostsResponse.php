<?php

/**
 * @license Apache 2.0
 */

namespace BlogTest;

/**
 * Class PostsResponse
 *
 * @package BlogTest\controllers
 *
 * @author  MC <manuelcogua@blogtest.com>
  * @OA\Schema(
 *     title="Post model",
 *     description="Post model",
 * )
 */
class PostsResponse
{

    /**
     * @OA\Property(
     *     default=1,
     *     format="int32",
     *     description="User ID",
     *     title="User ID",
     * )
     *
     * @var int
     */
    private $userId;

    
    /**
     * @OA\Property(
     *     default=1,
     *     format="int32",
     *     description="ID",
     *     title="ID",
     * )
     *
     * @var int
     */
    private $id;

    /**
     * @OA\Property(
     *     default="title",
     *     format="string",
     *     description="Title",
     *     title="Title",
     * )
     *
     * @var string
     */
    private $title;

    /**
     * @OA\Property(
     *     default="Text body",
     *     format="string",
     *     description="Body",
     *     title="Body",
     * )
     *
     * @var string
     */
    private $body;

    /**
     * @OA\Property(
     *     title="Author",
     * )
     *
     * @var \BlogTest\Authors
     */
    private $author;

    
}