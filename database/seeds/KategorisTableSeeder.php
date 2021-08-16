<?php

use Illuminate\Database\Seeder;

class KategorisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kategoris = array(
        	['id' => 1, 'nama'=>'Berita'],
        	['id' => 2, 'nama'=>'Pengumuman'],
        	['id' => 3, 'nama'=>'Intermezzo'],);
        DB::table('kategoris')->insert($kategoris);
    }
}
