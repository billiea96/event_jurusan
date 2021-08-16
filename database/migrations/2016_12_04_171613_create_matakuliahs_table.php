<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatakuliahsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matakuliahs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kode_mk', 10)->unique();
            $table->string('nama', 50);
            $table->integer('jumlah_sks');
            $table->longText('deskripsi');
            $table->integer('lab_id')->unsigned();
            $table->foreign('lab_id')->references('id')->on('labs');
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
        Schema::drop('matakuliahs');
    }
}
