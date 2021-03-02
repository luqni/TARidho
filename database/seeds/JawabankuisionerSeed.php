<?php

use Illuminate\Database\Seeder;

class JawabankuisionerSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //input data ke table jawaban kuisioner
        DB::table('jawabankuisioner')->insert([
            'id' => '01',
            'jawaban' => 'sangat tidak setuju',
            'id' => '02',
            'jawaban' => 'Tidak Setuju',
            'id' => '03',
            'jawaban' => 'agak setuju',
            'id' => '04',
            'jawaban' => 'Setuju',
            'id' => '05',
            'jawaban' => 'Sangat setuju',
        ]);
    }
}
