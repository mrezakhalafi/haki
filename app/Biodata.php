<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Biodata extends Model
{
    protected $fillable = [
        'id', 'users_id', 'no_ktp', 'nama_sertifikat', 'tempat_lahir', 'email', 'no_npwp', 'nama_tanpa_gelar', 'tanggal_lahir', 'telepon', 'jk', 'negara', 'jalan', 'provinsi', 'kode_pos', 'kabupaten', 'file_ktp', 'file_persyaratan_kebenaran', 'file_photo', 'file_riwayat_hidup', 'file_npwp', 'created_at', 'updated_at'
    ];
}
