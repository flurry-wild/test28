<?php

namespace App\Services;

use App\Models\AutoModel;
use App\Models\Mark;
use Illuminate\Support\Collection;

class ListService
{
    const COLORS = ['red', 'green', 'blue'];

    public function marks(): Collection
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

    public function models(array $data = null): Collection
    {
        $query = AutoModel::query();

        if (! empty($data)) {
            $query->where('mark_id', $data['mark_id']);
        }

        return $query->get()->map(
            function (AutoModel $model) {
                return [
                    'name' => $model->name,
                    'code' => $model->id
                ];
            }
        );
    }

    public function colors(): array
    {
        return static::COLORS;
    }
}
