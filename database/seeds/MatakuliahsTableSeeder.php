<?php

use Illuminate\Database\Seeder;

class MatakuliahsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $matakuliahs = array(
        	['id' => 1, 'kode_mk' =>'PETER', 'nama'=>'Pemrograman Terdistribusi', 'deskripsi'=>'Distributed Programming', 'lab_id'=>1],
        	['id' => 2, 'kode_mk' =>'IMK', 'nama'=>'Interaksi Manusia Komputer', 'deskripsi'=>'Human Computer Interaction', 'lab_id'=>3],
        	['id' => 3, 'kode_mk' =>'KB', 'nama'=>'Kecerdasan Buatan', 'deskripsi'=>'Artificial Intelligence', 'lab_id'=>1],
        	['id' => 4, 'kode_mk' =>'DIS', 'nama'=>'Desain dan Implementasi Sistem', 'deskripsi'=>'System Design and Implementation', 'lab_id'=>2],);
        DB::table('matakuliahs')->insert($matakuliahs);
    }
}
