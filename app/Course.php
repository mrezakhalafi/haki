<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'id', 'biodatas_id', 'nama_penyelenggara', 'alamat', 'tahun', 'provinsi', 'nama_kursus', 'no_sertifikat', 'negara', 'kabupaten', 'file_persyaratan', 'created_at', 'updated_at'
    ];
}
