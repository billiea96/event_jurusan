<?php

use Illuminate\Database\Seeder;

class LabsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $labs = array(
        	['id' => 1, 'nama'=>'Intelligent System', 'deskripsi'=>'Sistem pintar'],
        	['id' => 2, 'nama'=>'Software Engineering', 'deskripsi'=>'Rekayasa perangkat lunak'],
        	['id' => 3, 'nama'=>'Multimedia Computing', 'deskripsi'=>'Komputasi multimedia'],);
        DB::table('labs')->insert($labs);
    }
}
