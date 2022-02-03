<?php

/**
 * @OA\Info(
 *      version="1.0.0",
 *      title="Prueba Técnica API OpenApi",
 *      description="API documentation",
 *      @OA\Contact(
 *          email="manuelcogua@outlook.com"
 *      ),
 *     @OA\License(
 *         name="Apache 2.0",
 *         url="http://www.apache.org/licenses/LICENSE-2.0.html"
 *     )
 * )
 */

/**
 *  @OA\Server(
 *      url=L5_SWAGGER_CONST_HOST,
 *      description="demo server"
 *  )
 *
 */

/**
 * @OA\OpenApi(
 *   security={
 *     {
 *       "oauth2": {"read:oauth2"},
 *     }
 *   }
 * )
 */
