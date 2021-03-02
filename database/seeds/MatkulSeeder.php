<?php

use Illuminate\Database\Seeder;

class MatkulSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //input data ke table matkul
        DB::table('Matakuliah')->insert([
            'id' => '01',
            'nama' => 'Pemrograman Web Lanjutan',
            'sks' => '3',
            'id' => '02',
            'nama' => 'Pemgrograman Web Dasar',
            'sks' => '2',
            'id' => '3',
            'nama' => 'Object Oriented Programing',
            'sks' => '3',
        ]);
    }
}
