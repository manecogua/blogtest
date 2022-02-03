<?php

namespace BlogTest\controllers;

 /**
  * Class Posts.
  *
  * @author  MC <manuelcogua@blogtest.com>
  */
 class Posts
 {
     /**
      * @OA\Get(
      *     path="/posts",
      *     tags={"posts"},
      *     summary="Returns list of posts",
      *     description="Returns list of post and authors information",
      *     operationId="getPosts",
      *     @OA\Response(
      *         response=200,
      *          description="successful operation",
      *          @OA\JsonContent(
      *             type="array",
      *             @OA\Items(ref="#/components/schemas/PostsResponse")
      *         ),
      *     )
      * )
      */
     public function getPosts()
     {
     }

     /**
      * @OA\Post(
      *     path="/posts",
      *     tags={"posts"},
      *     summary="Add a new post.",
      *     operationId="storePost",
      *     @OA\Response(
      *         response=200,
      *         description="successful operation",
      *         @OA\JsonContent(ref="#/components/schemas/Posts"),
      *         @OA\XmlContent(ref="#/components/schemas/Posts")
      *     ),
      *     @OA\Response(
      *         response=422,
      *         description="bad request",
      *         @OA\JsonContent(ref="#/components/schemas/Posts"),
      *         @OA\XmlContent(ref="#/components/schemas/Posts")
      *     ),
      *     @OA\RequestBody(
      *         description="data post for saving",
      *         required=true,
      *         @OA\JsonContent(ref="#/components/schemas/PostRequest")
      *     )
      * )
      */
     public function storePost()
     {
     }
 }
