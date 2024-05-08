<?php

namespace App\Http\Controllers\Swagger;

use App\Http\Controllers\Controller;

/**
 * @OA\Get(
 *     path="/lists/",
 *     summary="Списки значений",
 *     tags={"List"},
 *
 *     @OA\Response(
 *         response=200,
 *         description="Список марок, список цветов",
 *         @OA\JsonContent(
 *             @OA\Property(property="data", type="object",
 *                 @OA\Property(property="marks", type="array", @OA\Items(
 *                     @OA\Property(property="name", type="string", example="TOYOTA"),
 *                     @OA\Property(property="code", type="integer", example=1),
 *                 )),
 *                 @OA\Property(property="colors", type="array", example={"red", "green", "blue"}, @OA\Items(
 *                     type="string"
 *                 ))
 *             )
 *         )
 *     )
 * )
 *
 * @OA\Get(
 *     path="/models/",
 *     summary="Список моделей",
 *     tags={"List"},
 *
 *     @OA\Response(
 *          response=200,
 *          description="Список моделей",
 *          @OA\JsonContent(
 *              @OA\Property(property="data", type="array", @OA\Items(
 *                  @OA\Property(property="name", type="string", example="CRESTA"),
 *                  @OA\Property(property="code", type="integer", example=1),
 *              ))
 *          )
 *     )
 * )
 */
class ListController extends Controller
{

}
