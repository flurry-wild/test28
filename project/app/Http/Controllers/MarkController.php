<?php

namespace App\Http\Controllers;

use App\Models\Mark;
use Illuminate\Http\JsonResponse;

class MarkController extends Controller
{
    public function index()
    {
        return new JsonResponse([
                'data' => Mark::all()->map(
                    function (Mark $mark) {
                        return [
                            'name' => $mark->name,
                            'code' => $mark->id
                        ];
                    }
                )
        ]);
    }
}
