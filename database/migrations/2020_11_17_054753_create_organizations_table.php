<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrganizationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organizations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('biodatas_id');
            $table->string('nama_instansi', 50);
            $table->text('alamat');
            $table->date('tgl_awal');
            $table->date('tgl_akhir');
            $table->text('deskripsi_pekerjaan');
            $table->string('jabatan',50);
            $table->string('jenis_instansi',50);
            $table->string('file_pengalaman_organisasi',255);
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
        Schema::dropIfExists('organizations');
    }
}
