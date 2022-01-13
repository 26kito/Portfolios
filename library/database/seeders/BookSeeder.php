<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        foreach( range(1, 50) as $index ) {
            DB::table('books')->insert([
                'isbn' => $faker->randomNumber(4),
                'title' => $faker->word(3),
                'year' => rand(2020, 2022),
                'publisher_id' => rand(1, 20),
                'author_id' => rand(1, 20),
                'catalog_id' => rand(1, 4),
                'qty' => rand(1, 20),
                'price' => rand(10000, 50000)
            ]);
        }
    }
}
