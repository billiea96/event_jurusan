<?php

use Illuminate\Database\Seeder;

class MahasiswasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mahasiswas = array(
        	['id' => 1, 'nrp'=>'160414009', 'nama'=>'Evin Cintiawan', 'user_id'=>4],
        	['id' => 2, 'nrp'=>'160414033', 'nama'=>'Sonny Haryadi', 'user_id'=>5],
        	['id' => 3, 'nrp'=>'160414042', 'nama'=>'Billie Arianto', 'user_id'=>6],
        	['id' => 4, 'nrp'=>'160814999', 'nama'=>'Rapha Natanael', 'user_id'=>7],);
        DB::table('mahasiswas')->insert($mahasiswas);
    }
}
