<?php

use Illuminate\Database\Seeder;

class DosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //insert data Dosen kedalam DB Dosen
        DB::table('Dosen')->insert([
            'id' => '1',
            'nama' => 'Pristi Sukma Setya',
        ]);
    }
}
