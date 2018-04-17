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
        foreach (range(0, 100) as $i) {
          DB::table('beritas')->insert([
            'title' => $faker->realText($maxNbChars = 50, $indexSize = 2),
            'isi' => $faker->realText($maxNbChars = 1000),
            'thumbnail' => '/storage/thumbnail/apfmkmFVgTsbYvOFoQpM3rjmz7GrcKc6mg5cq7dW.jpeg',
            'penulis' => $faker->name,
            'like' => 0
          ]);
        }
    }
}
