<?php

namespace App\Services;

use App\Models\Auto;
use Illuminate\Support\Collection;

class AutoService
{
    public function store(array $data): Auto | null
    {
        return Auto::create($data);
    }

    public function update(Auto $auto, array $data): bool
    {
        return $auto->update($data);
    }

    public function list(): Collection
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

    public function one(int $id): Auto | null
    {
        return Auto::where('id', $id)->with('model', 'model.mark')->first();
    }

    public function delete(int $id): bool
    {
        return Auto::find($id)->delete();
    }
}
