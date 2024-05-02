<?php

namespace App\Services;

use App\Models\Auto;

class AutoService
{
    public function store($data)
    {
        return Auto::create($data);
    }
}
