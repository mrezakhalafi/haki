<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kabupaten extends Model
{
    protected $fillable = [
        'id', 'provinsis_id', 'nama', 'created_at', 'updated_at'
    ];
}
