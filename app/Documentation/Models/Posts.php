<?php

/**
 * @license Apache 2.0
 */

namespace BlogTest;

/**
 * Class Posts
 *
 * @package BlogTest\controllers
 *
 * @author  MC <manuelcogua@blogtest.com>
 * @OA\Schema(
 *     title="Post model",
 *     description="Post model",
 * )
 */
class Posts
{

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
     *     format="int64",
     *     title="ID",
     *     default=1,
     *     description="ID",
     * )
     *
     * @var integer
     */
    private $id;

    
}