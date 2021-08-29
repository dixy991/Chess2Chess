<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table("users")->insert([
            "username" => "admin",
            "email" => "admin@gmail.com",
            "password" => Hash::make("admin"),
            "active" => 1,
            "role_id" => 1
        ]);

    }
}
