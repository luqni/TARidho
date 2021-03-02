<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class JawabankuisionerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for($i = 1; $i <= 50; $i++){
            DB::table('jawabankuisioner')->insert([
                'id'=> $faker->id,
                'jawaban'=>$faker->jawaban
            ]);
        }
    }
}
