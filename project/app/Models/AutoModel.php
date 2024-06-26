<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AutoModel extends Model
{
    use HasFactory;

    protected $table = 'models';
    public $timestamps = false;

    public function mark()
    {
        return $this->belongsTo(Mark::class);
    }
}
