<?php

namespace App\Services;

use App\Models\AutoModel;
use App\Models\Mark;

class ListService
{
    const COLORS = ['red', 'green', 'blue'];

    public function marks()
    {
        return Mark::all()->map(
            function (Mark $mark) {
                return [
                    'name' => $mark->name,
                    'code' => $mark->id
                ];
            }
        );
    }

    public function models()
    {
        return AutoModel::all()->map(
            function (AutoModel $model) {
                return [
                    'name' => $model->name,
                    'code' => $model->id
                ];
            }
        );
    }

    public function colors()
    {
        return static::COLORS;
    }
}
