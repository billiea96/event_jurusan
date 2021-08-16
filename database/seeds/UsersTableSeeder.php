<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $penggunas = array(
        	['id' => 1,
            'name' => 'joko', 
        	'email'=>'joko@staffjurusan.com',
        	'password' => Hash::make('12345678'),
            'hak_akses' => 'Dosen'],
        	['id' => 2,
            'name' => 'prabowo', 
        	'email'=>'prabowo@staffjurusan.com',
        	'password' => Hash::make('12345678'),
            'hak_akses' => 'Dosen'],
            ['id' => 3,
            'name' => 'basuki', 
            'email'=>'basuki@staffjurusan.com',
            'password' => Hash::make('12345678'),
            'hak_akses' => 'Admin'],
            ['id' => 4,
            'name' => 'evin',
            'email'=>'evin@student.com',
            'password' => Hash::make('12345678'),
            'hak_akses' => 'Mahasiswa'],
            ['id' => 5,
            'name' => 'sonny', 
            'email'=>'sonny@student.com',
            'password' => Hash::make('12345678'),
            'hak_akses' => 'Mahasiswa'],
            ['id' => 6,
            'name' => 'billie', 
            'email'=>'billie@student.com',
            'password' => Hash::make('12345678'),
            'hak_akses' => 'Mahasiswa'],
            ['id' => 7,
            'name' => 'rapha', 
            'email'=>'rapha@student.com',
            'password' => Hash::make('12345678'),
            'hak_akses' => 'Mahasiswa'],
            );
        DB::table('users')->insert($penggunas);
    }
}
