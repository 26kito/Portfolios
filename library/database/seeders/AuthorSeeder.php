<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class AuthorSeeder extends Seeder
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
            DB::table('authors')->insert([
                'author_name' => $faker->name,
                'email' => $faker->email,
                'phone_number' => '08'.$faker->randomNumber(9),
                'address' => $faker->address
            ]);
        }
    }
}
