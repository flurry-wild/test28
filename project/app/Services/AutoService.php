<?php

namespace App\Services;

use App\Models\Auto;

class AutoService
{
    public function store($data)
    {
        return Auto::create($data);
    }

    public function update($auto, $data): bool
    {
        return $auto->update($data);
    }

    public function list()
    {
        return Auto::with('model', 'model.mark')
            ->get()
            ->map(function ($auto) {
                return [
                    'code' => $auto->id,
                    'name' => sprintf('%s %s', $auto->model->mark->name, $auto->model->name),
                ];
            });
    }
}
