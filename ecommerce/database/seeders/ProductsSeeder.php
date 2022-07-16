<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach(range(1, 100) as $index) {
            DB::table('products')->insert([
                'category_id' => $faker->randomNumber(1, 100),
                'code' => $faker->randomNumber(6),
                'name' => $faker->word(2),
                'stock' => $faker->randomNumber(3),
                'varian' => $faker->word(1),
                'description' => $faker->sentence(2),
                'image' => $index . '.jpg',
                'price' => $faker->randomNumber(6)
            ]);
        }
        }
    }