<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBiodatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biodatas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('users_id');
            $table->bigInteger('no_ktp');
            $table->string('nama_sertifikat', 255);
            $table->string('tempat_lahir', 255);
            $table->string('email', 100);
            $table->string('no_npwp', 50);
            $table->string('nama_tanpa_gelar', 255);
            $table->date('tanggal_lahir');
            $table->string('telepon', 50);
            $table->string('jk', 20);
            $table->string('negara', 50);
            $table->string('jalan', 255);
            $table->string('provinsi', 50);
            $table->string('kode_pos', 20);
            $table->string('kabupaten', 20);
            $table->string('file_ktp', 255);
            $table->string('file_pernyataan_kebenaran', 255);
            $table->string('file_photo', 255);
            $table->string('file_riwayat_hidup', 255);
            $table->string('file_npwp', 255);
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
        Schema::dropIfExists('biodatas');
    }
}
