<?php

use Illuminate\Database\Seeder;

class KuisionerdosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //insert daata ke table kuisionerdosen
        DB::table('kuisionerdosen')->insert([
            'id' => '01',
            'pertanyaan' => 'Apakah perkuliahaan dimulai dan di akhiri tepat waktu',
            'aktif'=> '',
            'choice' => '5',
            'id' => '02',
            'pertanyaan' => 'Dosen mengeuasai materi dengan baik',
            'aktif' => '',
            'choice' => '5',
            'id' => '3',
            'pertanyaan' => 'Diskusi materi dan pembahasan tugas/ujian berjalan baik, di dalam/luar kelas',
            'aktif' => '',
            'choice' => '5',
        ]);
        for ($i=0; $i < 3; $i++){
            kuisionerdosen:create([
                'pertanyaan' => rand(1,3),

            ]);
        }
    }
}
