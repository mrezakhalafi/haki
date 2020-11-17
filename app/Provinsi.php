<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provinsi extends Model
{
    protected $fillable = [
        'id', 'countries_id', 'nama', 'created_at', 'updated_at'
    ];
}
