<?php

use Illuminate\Database\Seeder;

class SharehostingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sharehostings = array(
        	['id' => 1, 'tgl_permintaan'=>'2016-12-01', 'status_peminjaman'=>'Draft', 'keterangan'=>'Dalam proses validasi', 'mahasiswa_id'=>1, 'karyawan_id'=>2],
        	['id' => 2, 'tgl_permintaan'=>'2016-12-02', 'status_peminjaman'=>'Draft', 'keterangan'=>'Dalam proses validasi', 'mahasiswa_id'=>2, 'karyawan_id'=>2],);
        DB::table('sharehostings')->insert($sharehostings);
    }
}
