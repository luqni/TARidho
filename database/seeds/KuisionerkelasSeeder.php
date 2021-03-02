<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class KuisionerkelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //insert data to database
        DB::table('kuisionerkelas')->insert([
            'id' => '',
            'nim' => '',
            'kelas_id' => '',
            'pertanyaan' => 'pertanyaan_id',
            'jawaban' => 'jawaban_id',
            'jawaban' => 'jawaban_text',
        ]);
    }
}
