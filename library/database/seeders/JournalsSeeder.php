<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JournalsSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create('id_ID');

        for ($i = 1; $i <= 10; $i++) {
            DB::table('journals')->insert([
                'title' => $faker->word(),
                'publisher' => $faker->name(),
                'author' => $faker->name(),
                'year' => $faker->year(),
            ]);
        }
    }
}
