<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('biodatas_id');
            $table->string('nama_studi', 50);
            $table->string('program_studi', 50);
            $table->string('tahun_lulus', 20);
            $table->string('provinsi', 50);
            $table->string('negara', 50);
            $table->string('no_ijazah', 255);
            $table->text('alamat');
            $table->string('jenjang', 50);
            $table->string('kabupaten', 50);
            $table->string('file_ijazah', 255);
            $table->string('file_data_pendidikan', 255);
            $table->string('file_keterangan_universitas', 255);
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
        Schema::dropIfExists('studies');
    }
}
