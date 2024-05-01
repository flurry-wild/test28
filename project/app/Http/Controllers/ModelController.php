<?php

namespace App\Http\Controllers;

use App\Models\AutoModel;
use Illuminate\Http\JsonResponse;

class ModelController extends Controller
{
    public function index()
    {
        return new JsonResponse([
            'data' => AutoModel::all()->map(
                function (AutoModel $model) {
                    return [
                        'name' => $model->name,
                        'code' => $model->id
                    ];
                }
            )
        ]);
    }
}
