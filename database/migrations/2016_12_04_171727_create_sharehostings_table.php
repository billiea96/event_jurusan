<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSharehostingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sharehostings', function (Blueprint $table) {
            $table->increments('id');
            $table->date('tgl_permintaan');
            $table->date('tgl_validasi_supervisor')->nullable();
            $table->date('tgl_validasi_kajur')->nullable();
            $table->date('tgl_akhir_peminjaman')->nullable();
            $table->string('status_peminjaman', 50);
            $table->string('keterangan', 50)->nullable();
            $table->integer('mahasiswa_id')->unsigned();
            $table->foreign('mahasiswa_id')->references('id')->on('mahasiswas');
            $table->integer('karyawan_id')->unsigned();
            $table->foreign('karyawan_id')->references('id')->on('karyawans');
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
        Schema::drop('sharehostings');
    }
}
