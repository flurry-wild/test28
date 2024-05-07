<?php

namespace App\Http\Controllers;

use App\Http\Requests\AutoStoreRequest;
use App\Http\Requests\AutoUpdateRequest;
use App\Models\Auto;
use App\Services\AutoService;
use Illuminate\Http\JsonResponse;

class AutoController extends Controller
{
    public function __construct(private AutoService $service) {}

    public function index()
    {
        return new JsonResponse(['data' => $this->service->list()]);
    }

    public function show(Auto $auto)
    {
        return new JsonResponse(['data' => $this->service->one($auto->id)]);
    }

    public function create()
    {
        return view('app');
    }

    public function store(AutoStoreRequest $request)
    {
        return new JsonResponse(['data' => $this->service->store($request->validated())]);
    }

    public function update(AutoUpdateRequest $request, Auto $auto)
    {
        return new JsonResponse([
            $this->service->update($auto, $request->validated())
        ]);
    }

    public function delete(Auto $auto)
    {
        return new JsonResponse($this->service->delete($auto->id));
    }
}
