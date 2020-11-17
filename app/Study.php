<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Study extends Model
{
    protected $fillable = [
        'id', 'biodatas_id', 'nama_studi', 'program_studi', 'tahun_lulus', 'provinsi', 'negara', 'no_ijazah', 'alamat', 'jenjang' , 'kabupaten', 'file_ijazah', 'file_data_pendidikan', 'file_keterangan_universitas','created_at', 'updated_at'
    ];
}
