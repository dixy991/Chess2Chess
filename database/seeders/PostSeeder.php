<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i = 0; $i < 15; $i++){
            \DB::table("posts")->insert([
               "title" => $faker->sentence(5),
               "text" => $faker->text(150),
               "thumbnail" => "chess.png",
               "date" => $faker->date("Y-m-d"),
               "category_id" => rand(1,4)
            ]);
        }
    }
}
