<?php

/**
 * @license Apache 2.0
 */

namespace BlogTes;

/**
 * Class PostRequest.
 *
 * @author  MC <manuelcogua@blogtest.com>
 * @OA\Schema(
 *     title="Post request model",
 *     description="Post request model",
 * )
 */
class PostRequest
{
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
     *     default=1,
     *     format="int32",
     *     description="User ID",
     *     title="User ID",
     * )
     *
     * @var int
     */
    private $userId;
}
