<?php

/**
 * @license Apache 2.0
 */

namespace BlogTest;

/**
 * Class Author.
 *
 * @author  MC <manuelcogua@blogtest.com>
 * @OA\Schema(
 *     title="Author model",
 *     description="Author model",
 * )
 */
class Authors
{
    /**
     * @OA\Property(
     *     format="int64",
     *     title="ID",
     *     default=1,
     *     description="ID",
     * )
     *
     * @var int
     */
    private $id;

    /**
     * @OA\Property(
     *     default="Leanne Graham",
     *     format="string",
     *     description="Name",
     *     title="Name",
     * )
     *
     * @var string
     */
    private $name;

    /**
     * @OA\Property(
     *     default="Bret",
     *     format="string",
     *     description="Username",
     *     title="Username",
     * )
     *
     * @var string
     */
    private $username;

    /**
     * @OA\Property(
     *     default="Sincere@april.biz",
     *     format="string",
     *     description="Email",
     *     title="Email",
     * )
     *
     * @var string
     */
    private $email;
}
