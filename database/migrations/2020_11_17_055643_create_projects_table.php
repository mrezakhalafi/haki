<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('biodatas_id');
            $table->string('nama_proyek',50);
            $table->date('tgl_awal');
            $table->date('tgl_akhir');
            $table->string('jabatan',50);
            $table->string('lokasi',255);
            $table->string('nilai_proyek',255);
            $table->string('file_pengalaman_proyek',255);
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
        Schema::dropIfExists('projects');
    }
}
