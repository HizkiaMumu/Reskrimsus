<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWbsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wbs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_pelapor');
            $table->string('email_pelapor');
            $table->string('nomor_telepon');
            $table->string('judul_laporan');
            $table->text('uraian_pengaduan');
            $table->string('dugaan_korupsi');
            $table->string('nama_pihak_terlibat');
            $table->string('jabatan');
            $table->string('klasifikasi_jabatan');
            $table->string('pihak_lain_terlibat')->nullable();
            $table->string('lampiran_file_pendukung');
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
        Schema::dropIfExists('wbs');
    }
}
