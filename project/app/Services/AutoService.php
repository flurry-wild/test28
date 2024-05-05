<?php

namespace App\Services;

use App\Models\Auto;

class AutoService
{
    public function store(array $data)
    {
        return Auto::create($data);
    }

    public function update(Auto $auto, array $data): bool
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

    public function one(int $id)
    {
        return Auto::find($id)->with('model', 'model.mark')->first();
    }
}
