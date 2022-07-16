<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Faker::create();
        foreach(range(1,100) as $index) {
            DB::table('categories')->insert([
                'name' => 'kategori '. $index
            ]);
        }
    }
}
