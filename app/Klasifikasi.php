<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Klasifikasi extends Model
{
    protected $fillable = [
        'id', 'biodatas_id', 'tgl_permohonan', 'bidang', 'asosiasi_profesi', 'no_reg_asosiasi', 'tempat_ustk', 'kualifikasi', 'sub_bidang', 'provinsi', 'jenis_permohonan', 'file_berita_acara', 'file_pengantar_permohonan', 'file_surat_permohonan', 'file_sertifikat_keahlian','created_at', 'updated_at'
    ];
}
