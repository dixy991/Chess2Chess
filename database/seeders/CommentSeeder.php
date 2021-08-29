<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
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
            \DB::table("comments")->insert([
                "text" => $faker->text(150),
                "user_id" => rand(1,2),
                "post_id" => rand(1,15)
            ]);
        }
    }
}
