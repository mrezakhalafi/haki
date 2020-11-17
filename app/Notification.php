<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    protected $fillable = [
        'id', 'users_id', 'judul', 'pesan', 'status', 'created_at', 'updated_at'
    ];
}
