<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('biodatas_id');
            $table->string('nama_penyelenggara', 100);
            $table->text('alamat');
            $table->string('tahun', 20);
            $table->string('provinsi', 50);
            $table->string('nama_kursus', 50);
            $table->string('no_sertifikat', 255);
            $table->string('negara', 50);
            $table->string('kabupaten', 50);
            $table->string('file_persyaratan', 255);
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
        Schema::dropIfExists('courses');
    }
}
