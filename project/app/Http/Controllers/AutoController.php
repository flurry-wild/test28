<?php

namespace App\Http\Controllers;

use App\Http\Requests\AutoStoreRequest;
use App\Services\AutoService;
use Illuminate\Http\JsonResponse;

class AutoController extends Controller
{
    public function __construct(private AutoService $service) {}

    public function index()
    {

    }

    public function show()
    {

    }

    public function create()
    {
        return view('index');
    }

    public function store(AutoStoreRequest $request)
    {
        return new JsonResponse([$this->service->store($request->validated())]);
    }

    public function update()
    {

    }
}
