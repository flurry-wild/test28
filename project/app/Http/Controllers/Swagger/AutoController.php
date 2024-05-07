<?php

namespace App\Http\Controllers\Swagger;

use App\Http\Controllers\Controller;

/**
 * @OA\Info(
 *     title="Auto CRUD",
 *     version="1.0.0"
 * ),
 * @OA\PathItem(
 *     path="/"
 * )
 *
 * @OA\Get(
 *     path="/",
 *     summary="Страница формы создания авто",
 *     tags={"Auto"},
 *
 *     @OA\Response(
 *         response=200,
 *         description="Html страница"
 *     )
 * )
 *
 * @OA\Get(
 *     path="/autos/",
 *     summary="Список автомобилей без подробных характеристик",
 *     tags={"Auto"},
 *
 *     @OA\Response(
 *         response=200,
 *         description="Список",
 *         @OA\JsonContent(
 *             @OA\Property(property="data", type="array", @OA\Items(
 *                 @OA\Property(property="code", type="integer", example=1),
 *                 @OA\Property(property="name", type="string", example="TOYOTA CRESTA")
 *             ))
 *         )
 *     )
 * )
 *
 * @OA\Get(
 *     path="/auto/{auto}",
 *     summary="Автомобиль",
 *     tags={"Auto"},
 *
 *     @OA\Response(
 *         response=200,
 *         description="Данные авто",
 *         @OA\JsonContent(
 *              @OA\Property(property="data", type="object",
 *                  @OA\Property(property="id", type="integer", example=1),
 *                  @OA\Property(property="model_id", type="integer", example=1),
 *                  @OA\Property(property="issue", type="integer", example=1980),
 *                  @OA\Property(property="mileage", type="integer", example=100000),
 *                  @OA\Property(property="color", type="string", example="red"),
 *                  @OA\Property(property="created_at", type="datetime", example="2024-05-02T13:30:14.000000Z"),
 *                  @OA\Property(property="updated_at", type="datetime", example="2024-05-02T13:30:14.000000Z"),
 *                  @OA\Property(property="model", type="object",
 *                      @OA\Property(property="id", type="integer", example=1),
 *                      @OA\Property(property="name", type="string", example="CRESTA"),
 *                      @OA\Property(property="mark_id", type="integer", example="1"),
 *                      @OA\Property(property="mark", type="object",
 *                          @OA\Property(property="id", type="integer", example=1),
 *                          @OA\Property(property="name", type="string", example="TOYOTA"),
 *                      )
 *                  )
 *              )
 *         )
 *     )
 * )
 *
 * @OA\Post(
 *     path="/auto",
 *     summary="Создание автомобиля",
 *     tags={"Auto"},
 *
 *     @OA\RequestBody(
 *         @OA\JsonContent(
 *             allOf={
 *                 @OA\Schema(
 *                     @OA\Property(property="model_id", type="integer", example=1),
 *                     @OA\Property(property="issue", type="integer", example=1980),
 *                     @OA\Property(property="mileage", type="integer", example=100000),
 *                     @OA\Property(property="color", type="string", example="red")
 *                 )
 *             }
 *         )
 *     ),
 *
 *     @OA\Response(
 *         response=200,
 *         description="Данные созданного авто",
 *         @OA\JsonContent(
 *             @OA\Property(property="data", type="object",
 *                 @OA\Property(property="model_id", type="integer", example=1),
 *                 @OA\Property(property="issue", type="integer", example=1980),
 *                 @OA\Property(property="mileage", type="integer", example=100000),
 *                 @OA\Property(property="color", type="string", example="red"),
 *             )
 *         )
 *     )
 * )
 *
 * @OA\Patch(
 *     path="/auto/{auto}",
 *     summary="Обновление автомобиля",
 *     tags={"Auto"},
 *
 *     @OA\RequestBody(
 *         @OA\JsonContent(
 *             allOf={
 *                 @OA\Schema(
 *                     @OA\Property(property="data", type="object",
 *                         @OA\Property(property="model_id", type="integer", example=1),
 *                         @OA\Property(property="issue", type="integer", example=1980),
 *                         @OA\Property(property="mileage", type="integer", example=100000),
 *                         @OA\Property(property="color", type="string", example="red"),
 *                     )
 *                 )
 *             }
 *         )
 *     ),
 *
 *     @OA\Response(
 *         response=200,
 *         description="Результат обновления",
 *         @OA\JsonContent(
 *             @OA\Property(property="result", type="boolean", example="true")
 *         )
 *     )
 * )
 */
class AutoController extends Controller
{

}
