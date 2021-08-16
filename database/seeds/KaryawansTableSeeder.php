<?php

use Illuminate\Database\Seeder;

class KaryawansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $karyawans = array(
        	['id' => 1, 'nip' => '6134009', 'nama'=>'Joko Widodo', 'jabatan_id'=>1, 'lab_id'=>1, 'user_id'=>1],
        	['id' => 2, 'nip' => '6134033', 'nama'=>'Prabowo Subianto', 'jabatan_id'=>5, 'lab_id'=>2, 'user_id'=>2],
        	['id' => 3, 'nip' => '6134039', 'nama'=>'Basuki Tjahaya Purnama', 'jabatan_id'=>4, 'lab_id'=>3, 'user_id'=>3],);
        DB::table('karyawans')->insert($karyawans);
    }
}
