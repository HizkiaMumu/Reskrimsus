<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class BeritasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach (range(0, 30) as $i) {
          DB::table('beritas')->insert([
            'title' => $faker->realText($maxNbChars = 50, $indexSize = 2),
            'isi' => $faker->realText($maxNbChars = 1000),
            'thumbnail' => $faker->imageUrl($width = 860, $height = 580),
            'penulis' => $faker->name,
            'like' => 0,
            'kategori_id' => 2,
            'created_at' => '2018-04-01 00:00:00'
          ]);
        }
    }
}
