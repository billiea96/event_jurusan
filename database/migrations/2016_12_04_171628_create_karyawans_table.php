<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKaryawansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('karyawans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nip', 12)->unique();
            $table->string('nama', 50);
            $table->integer('jabatan_id')->unsigned();
            $table->foreign('jabatan_id')->references('id')->on('jabatans');
            $table->integer('lab_id')->unsigned();
            $table->foreign('lab_id')->references('id')->on('labs');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::drop('karyawans');
    }
}
