<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'id', 'biodatas_id', 'nama_proyek', 'tgl_awal', 'tgl_akhir', 'jabatan', 'lokasi', 'nilai_proyek', 'file_pengalaman_proyek', 'created_at', 'updated_at'
    ];
}
