<?php

namespace App\Services;

use App\Models\AutoModel;
use App\Models\Mark;
use Spatie\Backtrace\Arguments\Reducers\StdClassArgumentReducer;

class ListService
{
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
        return [
            'red',
            'green',
            'blue'
        ];
    }

    public function issues()
    {
        return range(1980, date('Y'));
    }
}
