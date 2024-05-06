<?php

namespace App\Http\Controllers;

use App\Http\Requests\ListModelsIndexRequest;
use App\Services\ListService;
use Illuminate\Http\JsonResponse;

class ListController extends Controller
{
    /** @var ListService $service */

    public function __construct(protected ListService $service)
    {
    }

    public function index()
    {
        return new JsonResponse(['data' => [
            'marks' => $this->service->marks(),
            'models' => $this->service->models(),
            'colors' => $this->service->colors()
        ]]);
    }

    public function models(ListModelsIndexRequest $request)
    {
        return new JsonResponse([
            'data' => $this->service->models($request->validated()),
        ]);
    }
}
