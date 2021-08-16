<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(KategorisTableSeeder::class);
        $this->call(PostsTableSeeder::class);
        $this->call(LabsTableSeeder::class);
        $this->call(JabatansTableSeeder::class);
        $this->call(MatakuliahsTableSeeder::class);
        $this->call(KaryawansTableSeeder::class);
        $this->call(MahasiswasTableSeeder::class);
        $this->call(SharehostingsTableSeeder::class);
    }
}
