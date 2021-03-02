<?php

use Illuminate\Database\Seeder;

class ProdiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //insert Data Prodi ke table
        DB::table('Prodi')->insert([
            'id' => '01',
            'nama' => 'Teknik Informatika',
            'id' => '02',
            'nama' => 'Sistem Informasi',
        ]);
    }
}
