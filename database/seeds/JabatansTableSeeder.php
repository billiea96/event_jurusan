<?php

use Illuminate\Database\Seeder;

class JabatansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jabatans = array(
        	['id' => 1, 'nama' => 'Kepala Jurusan'],
        	['id' => 2, 'nama' => 'Wakil Kepala Jurusan'],
        	['id' => 3, 'nama' => 'Sekretaris Jurusan'],
        	['id' => 4, 'nama' => 'Kepala Laboratorium'],
        	['id' => 5, 'nama' => 'Dosen Tetap'],
        	['id' => 6, 'nama' => 'Dosen Tidak Tetap'],);
        DB::table('jabatans')->insert($jabatans);
    }
}
