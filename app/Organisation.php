<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organisation extends Model
{
    protected $fillable = [
        'id', 'biodatas_id', 'nama_instansi', 'alamat', 'tgl_awal', 'tgl_akhir', 'deskripsi_pekerjaan', 'jabatan', 'jenis_instansi', 'file_pengalaman_organisasi', 'created_at', 'updated_at'
    ];
}
