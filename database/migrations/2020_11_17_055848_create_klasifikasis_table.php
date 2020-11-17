<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKlasifikasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('klasifikasis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('biodatas_id');
            $table->date('tgl_permohonan');
            $table->string('bidang', 50);
            $table->string('asosiasi_profesi', 255);
            $table->string('no_reg_asosiasi', 255);
            $table->string('tempat_ustk', 255);
            $table->string('kualifikasi', 255);
            $table->string('sub_bidang', 255);
            $table->string('provinsi', 50);
            $table->string('jenis_permohonan', 50);
            $table->string('file_berita_acara', 255);
            $table->string('file_pengantar_permohonan', 255);
            $table->string('file_surat_permohonan', 255);
            $table->string('file_sertifikat_keahlian', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('klasifikasis');
    }
}
