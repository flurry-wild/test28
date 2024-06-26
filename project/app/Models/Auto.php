<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Auto extends Model
{
    use HasFactory;

    protected $fillable = ['model_id', 'issue', 'mileage', 'color'];

    public function model()
    {
        return $this->belongsTo(AutoModel::class);
    }

}
